<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }  
      
    // custom login
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    // user registration view
    public function registration()
    {
        return view('auth.register');
    }
      
    // user register route
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("login")->withSuccess('You have signed-in');
    }

    // user create
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    

    public function dashboard()
    {
        if(Auth::check()){
            return view('home');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }

    // get user detail 

    public function getProfile()
    {
        $user = Auth::user();
        $id = $user->id;

        $data = User::find($id);

        return view('/profile',compact('data',$data));

    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $id = $user->id;

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        if($request->get('password')=='')
        {
            $user->save();
            return redirect()->intended('profile')
                        ->withSuccess('Signed in');
        }

        else {
            $user->password = Hash::make($request->get('password'));
            $user->save();
            return redirect()->intended('signout')
                        ->withSuccess('Signed Out');
        }
       
    }
}