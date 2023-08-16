@extends('layouts/master')
@section('title','Add')
@section('content')
<div class="d-flex justify-content-end mb-2 px-2">
    <a href="{{route('home')}}" class="btn btn-dark ">Back</a>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <form action="{{ route('save.user') }}" method="POST" id="add_create" name="add_create">
                @csrf


                <div class="form-group">
                    <label>Name - {{session()->get('user_name')}}</label>
                    <input type="text" name="name" class="form-control">
                    @error('name')
                    <div class="alert-danger">{{$message}}</div>

                    @enderror
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control">
                    @error('email')
                    <div class="alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Dob</label>
                    <input type="date" name="date_of_birth" class="form-control">
                    @error('date_of_birth')
                    <div class="alert-danger">{{$message}}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label>status</label>
                    <select class="form-control" name="status">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    @error('status')
                    <div class="alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info btn-block">Add Data</button>
                    <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>


    </div>




</div>


@endsection