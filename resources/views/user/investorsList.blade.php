@extends('layouts/master')
@section('title','Investors')
@section('content')

<div class="d-flex justify-content-end mb-2 px-2">
    <a href="{{route('client.add')}}" class="btn btn-dark ">Add User</a>
</div>
<div class="mt-2">
    <h1>Investors List</h1>
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
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>

                <th scope="col">Status</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
            </tr>


        </thead>
        <tbody>
            @foreach ($client as $clients)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$clients->first_name}}</td>
                <td>{{$clients->last_name}}</td>
                <td>{{$clients->email}}</td>
                <td>{{$clients->phone_number}}</td>
                <td>{{$clients->status}}</td>
                <td>{{$clients->created_at}}</td>

                <td>

                    <a href="{{route('investor.edit',encrypt($clients->client_id))}}" class=""><i class="bi bi-pencil">
                        </i>
                    </a>
                    <a href="{{route('investor.delete',encrypt($clients->client_id))}}" class=""><i
                            class="bi bi-trash3"></i></a>
                </td>
            </tr>

            @endforeach


        </tbody>
    </table>

</div>

@endsection