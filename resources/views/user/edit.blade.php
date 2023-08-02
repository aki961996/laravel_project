@extends('layouts/master')
@section('title','Add')
@section('content')
<div class="container">

    <form action="{{ route('update.user') }}" method="POST" id="add_create" name="add_create">
        @csrf
        <div class="form-group">
            <input type="hidden" name="user_id" value="{{encrypt($user->user_id)}}" class="form-control">
        </div>

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="{{$user->name}}" class="form-control">

        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" value="{{$user->email}}" class="form-control">

        </div>

        <div class="form-group">
            <label>Dob</label>
            <input type="date" name="date_of_birth" value="{{$user->date_of_birth}}" class="form-control">

        </div>


        <div class="form-group">
            <label>status</label>
            {{-- value 1 vann active selectil --}}
            <select class="form-control" value="{{$user->status}}" name=" status">
                <option value="1" @if($user->status == 1) selected="selected" @endif>Active</option>
                <option value="0" @if($user->status == 0) selected="selected" @endif> Inactive</option>
            </select>

        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info btn-block">Add Data</button>
            <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
        </div>
    </form>

</div>


@endsection