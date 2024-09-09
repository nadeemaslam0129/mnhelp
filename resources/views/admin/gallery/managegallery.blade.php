@extends('admin.layout.main')
@section('title') {{'Manage Gallery'}} @endsection
@section('main-container')
    
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Manage Gallery</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
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
                            
                                <h5 class="card-title">Gallery Datatable</h5>
                                @if (Session::has('flash_message'))
                                <div class="alert alert-success">
                                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true"
                                        style="margin-right: 4%;">&times;</a>
                                    <strong>Success!</strong> {{ Session::get('flash_message') }}
                                </div>
                               @endif
                                <a href="{{ URL::to('gallery/create') }}" class="btn btn-primary" style="float:right; margin-bottom:5px;"><i
                                    class="fa fa-plus"></i> Add Image</a>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                               
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($gallery as $key=>$gr )
                                            <tr>
                                                
                                                 <td><img src="{{ URL::asset($gr->image) }}"  width="100px" height="50px"></td>
                                                <td> <a href="{{ URL::to('gallery/'. $gr->id . '/edit') }}"><button type="button" class="btn btn-primary">Edit</button></a>/
                                                <a href="{{ URL::to('gallery/destroy/' .$gr->id) }}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                                                
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Image</th>
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