@extends('layouts/master')
@section('title','home')
@section('content')
<h2>users</h2>

<div class="d-flex justify-content-end mb-2 px-2">
    <a href="{{route('user.add')}}" class="btn btn-info ">Add User</a>
</div>
<div class="mt-2">
    @if($msg= Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $msg }}</p>
    </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $users)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$users->name}}</td>
                <td>{{$users->email}}</td>
                <td>
                    <a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            @endforeach


        </tbody>
    </table>

</div>

@endsection