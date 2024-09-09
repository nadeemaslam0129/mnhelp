@extends('admin.layout.main')
@section('title') {{'Edit Price'}} @endsection
@section('main-container')
    
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Edit Price</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Price</li>
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
                    <form action="" method="POST">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Price Detail</h4>

                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="name">
                                        <option value="0" {{ $getSinglePrice->price_status == 0 ? 'selected' : '' }}>Furniture Assembly</option>
                                        <option value="1" {{ $getSinglePrice->price_status == 1 ? 'selected' : '' }}>General Mounting</option>
                                        <option value="2" {{ $getSinglePrice->price_status == 2 ? 'selected' : '' }}>TV selection</option>
                                        @error('name')
                                        <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                    </select>
                                    
                                   
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Price</label>
                                <div class="col-sm-9">
                                   <input type="text" name="price"  value="{{!empty($getSinglePrice->price) ? $getSinglePrice->price:''}}" class="form-control" required>
                                   @error('name')
                                   <span class="invalid-message">{{ $message }}</span>
                                   @enderror
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary mb-3" style="float: right">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>   
       
    </div>
    
 </div>
</div>
 @endsection  

 
 
