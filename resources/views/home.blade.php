@extends('layouts/master')
@section('title','home')
@section('content')


<div class="d-flex justify-content-end mb-2 px-2">
    <a href="{{route('user.add')}}" class="btn btn-info ">Add User</a>
</div>
<div class="mt-2">
    <h2>User List</h2>
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
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $users)
            <tr>
                <th scope="row">{{$user->firstItem() + $loop->index}}</th>
                <td>{{$users->name}}</td>
                <td>{{$users->email}}</td>
                <td>
                    <a href="{{route('edit-user',encrypt($users->user_id))}}" class="btn btn-primary">Edit</a>
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

@endsection