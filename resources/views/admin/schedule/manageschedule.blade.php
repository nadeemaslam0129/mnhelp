@extends('admin.layout.main')
@section('title') {{'Manage Schedule'}} @endsection
@section('main-container')
    
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Manage Schedule</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Schedule</li>
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
                            
                                <h5 class="card-title">Schedule Datatable</h5>
                                @if (Session::has('flash_message'))
                                <div class="alert alert-success">
                                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true"
                                        style="margin-right: 4%;">&times;</a>
                                    <strong>Success!</strong> {{ Session::get('flash_message') }}
                                </div>
                               @endif
                                <a href="{{ URL::to('schedule/create') }}" class="btn btn-primary" style="float:right; margin-bottom:5px;"><i
                                    class="fa fa-plus"></i> Add Schedule</a>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($schedule as $value )
                                            <tr>
                                                <td>{{$value->date}}</td>
                                                <td> <a href="{{ URL::to('schedule/'. $value->id . '/edit') }}"><button type="button" class="btn btn-primary">Edit</button></a>/
                                                <a href="{{ URL::to('schedule/destroy/' .$value->id) }}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                                                
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Date</th>
                                                <th>Action</th>
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