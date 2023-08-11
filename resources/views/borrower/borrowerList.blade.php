@extends('layouts/master')
@section('title','Borrowers')
@section('content')

<div class="d-flex justify-content-end mb-2 px-2">
    <a href="{{route('borrower.add')}}" class="btn btn-dark ">Add User</a>
</div>
<div class="mt-2">
    <h1>Borrowers List</h1>

    @if($msg= Session::get('success'))
    <div class="alert alert-success">
        <p class="mb-0">{{ $msg }}</p>
    </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Date Of Birth</th>
                <th scope="col">Teams</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
            </tr>


        </thead>
        <tbody>
            @foreach ($borrower as $item)


            <tr>
                <th scope="row">{{$borrower->firstItem() + $loop->index}}</th>
                <td>{{$item->first_name}}</td>
                <td>{{$item->last_name}}</td>
                <td>{{$item->gender}}</td>
                <td>{{$item->date_of_birth}}</td>
                <td>{{$item->teams}}</td>
                <td>{{$item->created_at}}</td>

                <td>

                    <a href="" class=""><i class="bi bi-pencil">
                        </i>
                    </a>
                    <a href="" class=""><i class="bi bi-trash3"></i></a>
                </td>
            </tr>


            @endforeach

        </tbody>
    </table>
    <div>

    </div>
    <div>
        {!! $borrower->links() !!}
    </div>

</div>

@endsection