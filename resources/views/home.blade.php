@extends('layouts/master')
@section('title','home')
@section('content')

<div class="container">


    <div class="mt-2">
        @if($msg= Session::get('message'))
        <div class="alert alert-success col-md-3 text-center ml-5">
            <p class="mb-0 ">{{ $msg }}</p>
        </div>
        @endif
        <div class="d-flex justify-content-between mb-2">
            <h4>Welcome {{auth()->user()->name}}</h4>
            <a href="{{route('user.add')}}" class="btn btn-info ">Add User</a>
        </div>

        <h3>User List</h3>

        @if($msg= Session::get('success'))
        <div class="alert alert-success">
            <p class="mb-0">{{ $msg }}</p>
        </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    {{-- <th scope="col">Address</th>
                    <th scope="col">State</th> --}}
                    <th class="text-right" scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $users)
                <tr>
                    <th scope="row">{{$user->firstItem() + $loop->index}}</th>
                    <td>{{$users->name}}</td>
                    <td>{{$users->email}}</td>
                    {{-- relation ship hasOne --}}
                    {{-- <td>{{$users->address->address_line_1}}</td>
                    <td>{{$users->address->state}}</td> --}}
                    <td class="text-right">
                        <a href="{{route('view-user',encrypt($users->user_id))}}" class="btn btn-warning">View</a>
                        <a href="{{route('edit-user',encrypt($users->user_id))}}" class="btn btn-primary ">Edit</a>
                        <a href="{{route('delete-user',encrypt($users->user_id))}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

                @endforeach


            </tbody>
        </table>

        {{-- Pagination --}}
        <div>
            {!! $user->links() !!}
        </div>

    </div>

</div>


@endsection