@extends('admin.layout.main')
@section('title') {{'Price'}} @endsection
@section('main-container')
    
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Manage Price</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Price</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        
                        
                        <div class="card">
                            <div class="card-body">
                            
                                <h5 class="card-title">Price Datatable</h5>
                                @if (Session::has('flash_message'))
                                <div class="alert alert-success">
                                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true"
                                        style="margin-right: 4%;">&times;</a>
                                    <strong>Success!</strong> {{ Session::get('flash_message') }}
                                </div>
                               @endif
                                <a href="{{ URL::to('price/create') }}" class="btn btn-primary" style="float:right; margin-bottom:5px;"><i
                                    class="fa fa-plus"></i> Add Price</a>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($getPrice as $value )
                                            <tr>
                                                <td>
                                                  @if($value->price_status==0)  
                                                    {{'Furniture Assembly'}}
                                                  @elseif($value->price_status==1) 
                                                    {{'General Mounting'}}  
                                                  @else
                                                    {{'TV selection'}}  
                                                  @endif  
                                                </td>
                                                <td>{{$value->price}}</td>
                                                <td> <a href="{{ URL::to('price/'. $value->id . '/edit') }}"><button type="button" class="btn btn-primary">Edit</button></a>/
                                                <a href="{{ URL::to('price/destroy/' .$value->id) }}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                                                
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Price</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection  