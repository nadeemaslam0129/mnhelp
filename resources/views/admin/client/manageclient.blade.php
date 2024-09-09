@extends('admin.layout.main')
@section('title') {{'Manage Client'}} @endsection
@section('main-container')
    
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Manage Client</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Client</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        
                        
                        <div class="card">
                            <div class="card-body">
                            
                                <h5 class="card-title">Client</h5>
                                @if (Session::has('flash_message'))
                                <div class="alert alert-success">
                                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true"
                                        style="margin-right: 4%;">&times;</a>
                                    <strong>Success!</strong> {{ Session::get('flash_message') }}
                                </div>
                               @endif
                                <a href="{{ URL::to('client/create') }}" class="btn btn-primary" style="float:right; margin-bottom:5px;"><i
                                    class="fa fa-plus"></i> Add Client</a>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                {{-- <th>Form Type</th> --}}
                                                <th>Rating</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($client as $key=>$value )
                                            <tr>
                                                <td><img src="{{asset($value->image)}}" style="width: 100px; height:100px"></td>
                                                <td>{{$value->name}}</td>
                                                <td>{{$value->position}}</td>
                                                {{-- <td> @if($value->assembly_mounting_tv==0)  
                                                    {{'Furniture Assembly'}}
                                                  @elseif($value->assembly_mounting_tv==1) 
                                                    {{'General Mounting'}}  
                                                  @else
                                                    {{'TV selection'}}  
                                                  @endif  </td> --}}
                                                <td>{{$value->rating}}</td>
                                                <td>{{$value->description}}</td>
                                                <td> <a href="{{ URL::to('client/'. $value->id . '/edit') }}"><button type="button" class="btn btn-primary">Edit</button></a> /
                                                    <a href="{{ URL::to('client/destroy/' .$value->id) }}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                                                
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                {{-- <th>Form Type</th> --}}
                                                <th>Rating</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            {{-- <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer> --}}
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        @endsection  