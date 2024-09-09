
@extends('admin.layout.main')
@section('title') {{'Edit Setting'}} @endsection
@section('main-container')
    
<div class="page-wrapper">
    
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Setting</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Setting</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
   
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @if (Session::has('flash_message'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true"
                        style="margin-right: 4%;">&times;</a>
                    <strong>Success!</strong> {{ Session::get('flash_message') }}
                </div>
                     @endif
                       
                        <form action="{{route('setting.update')}}" method="post" class = 'form-horizontal', enctype ='multipart/form-data'>
                          @csrf
                        <div class="card-body">
                            <h4 class="card-title">Settiong Info</h4>
                            <input type="hidden" name="eid" id="eid" class="form-control" value="{{$edit->id}}">
                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Website name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="website_name" id="website_name" class="form-control" value="{{$edit->website_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" name="email" id="email" class="form-control" value="{{$edit->email}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" name="phone" id="phone" class="form-control" value="{{$edit->phone}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                <div class="col-sm-9">
                                   <textarea  class="form-control" rows="4" name="address">{{$edit->address}}</textarea> 
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="image" id="image" class="form-control">
                                    @error('image')
                                            <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                </div>
                            </div> --}}
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>   
       
    </div>
    
 </div>
</div>
        @endsection  