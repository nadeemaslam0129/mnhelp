@extends('admin.layout.main')
@section('title') {{ 'Edit Schedule' }} @endsection
@section('main-container')

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Edit Schedule</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
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
                            <a href="#" class="close" data-dismiss="alert" aria-hidden="true" style="margin-right: 4%;">&times;</a>
                            <strong>Success!</strong> {{ Session::get('flash_message') }}
                        </div>
                    @endif
                   
                    <form action="{{ route('schedule.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="date_id" value="{{$getDate->id}}">
                        <div class="card-body">
                            <h4 class="card-title">Schedule Detail</h4>
                            <?php
                            use Carbon\Carbon;
                            $dateValue = $getDate->date ? Carbon::parse($getDate->date)->format('Y-m-d') : '';
                            ?>
                            <div class="form-group row">
                                <label for="date" class="col-sm-3 text-right control-label col-form-label">Date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="date" value="{{ $dateValue }}" required>
                                    @error('date')
                                        <span class="invalid-message">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-container">
                                @foreach ($getDate->getTimes as $time)
                                    <div class="form-group row">
                                        <label for="time" class="col-sm-3 text-right control-label col-form-label">Time</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="time[]" value="{{ $time->time }}" required>
                                            @error('time')
                                                <span class="invalid-message">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-1">
                                            <button type="button" class="remove-btn btn btn-danger">Remove</button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 text-right">
                                    <button type="button" class="add-btn btn btn-success" style="margin-right: 9px;">Add Time</button>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.add-btn').click(function() {
        var newFormGroup = `
            <div class="form-group row">
                <label class="col-sm-3 text-right control-label col-form-label">Time</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="time[]" required>
                </div>
                <div class="col-sm-1">
                    <button type="button" class="remove-btn btn btn-danger">Remove</button>
                </div>
            </div>
        `;
        $('.form-container').append(newFormGroup);
    });

    $(document).on('click', '.remove-btn', function() {
        $(this).closest('.form-group').remove();
    });
});
</script>
