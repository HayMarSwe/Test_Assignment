@extends('layout.master')

@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title"> Master Data List </h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"> Master Data List</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">

    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> Master Data List </h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="border-top-0">External Id</th>
                                <th class="border-top-0">Name </th>
                                <th class="border-top-0">Is Active </th>
                                <th class="border-top-0">List Order </th>
                                <th class="border-top-0">View Detail </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datalist as $data)
                            <tr>
                                <td class="txt-oflo">{{ $data->external_id }}</td>
                                <td class="txt-oflo">{{ $data->name }}</td>
                                <td>  @if ($data->is_active==1)
                                    <span class="label label-success label-rounded"> Active </span>
                                @else
                                    <span class="label label-danger label-rounded"> Inactive </span>
                                @endif
                               </td>
                                <td><span class="font-medium"> {{ $data->list_order }}</span></td>
                                <td> 
                                    <span class="font-medium">
                                         <button class="btn btn-success" id="viewdetail" onclick="getDetail({{$data->id}});"> <i class="ti-eye  me-1 ms-1"></i></button></span></td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>

                    
                    {{-- Pagination --}}
                    <div class="d-flex justify-content-center">
                        {!! $datalist->links() !!}
                    </div>

                    @include('detail')

                </div>
            </div>
        </div>
    </div>

</div>

@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="/js/ajax.js"></script>

