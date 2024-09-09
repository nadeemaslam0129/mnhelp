@extends('admin.layout.main')
@section('title') {{'Add Price'}} @endsection
@section('main-container')
    
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Add Price</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Price</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    @if (Session::has('flash_message'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true"
                        style="margin-right: 4%;">&times;</a>
                    <strong>Success!</strong> {{ Session::get('flash_message') }}
                </div>
                @endif
                   
                    <form action="{{route('price.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Price Detail</h4>

                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="name">
                                        <option value="0">Furniture Assembly</option>
                                        <option value="1">General Mounting</option>
                                        <option value="2">TV selection</option>
                                        @error('name')
                                        <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                    </select>
                                   
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Price</label>
                                <div class="col-sm-9">
                                   <input type="text" name="price"  class="form-control" required>
                                   @error('name')
                                   <span class="invalid-message">{{ $message }}</span>
                                   @enderror
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary mb-3" style="float: right">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>   
       
    </div>
    
 </div>
</div>
 @endsection  

 
 
