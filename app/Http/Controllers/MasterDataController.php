<?php

namespace App\Http\Controllers;
use App\Services\MasterDataService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class MasterDataController extends Controller
{
    
    private $MasterDataService;

    public function __construct()
    {
        $this->MasterDataService = new MasterDataService();
    }


    //  get masterdata list //
    public function getAll()
    {
        if(Auth::check()){
             
            $datalist = $this->MasterDataService->getAll();
            
            return view('/datalist',compact('datalist',$datalist));
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
       
    }

    // get masterdata detail //
    public function getDetail($id)
    {
        
        $info = $this->MasterDataService->getDetail($id);
        return response()->json([
            "data" => $info
        ], 200);
     

     
    }
}
