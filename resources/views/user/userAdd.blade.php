@extends('layouts/master')
@section('title','Add')
@section('content')
<div class="container">

    <form action="{{ route('save.user') }}" method="POST" id="add_create" name="add_create">
        @csrf

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control">
        </div>

        <div class="form-group">
            <label>Dob</label>
            <input type="date" name="date_of_birth" class="form-control">
        </div>


        <div class="form-group">
            <label>status</label>
            <select class="form-control" name="status">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info btn-block">Add Data</button>
            <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
        </div>
    </form>

</div>


@endsection