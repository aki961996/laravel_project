@extends('layouts/master')
@section('title','Todo')
@section('content')
<style>
    /* styles.css */
    .badge.high {
        background-color: red;
    }

    .badge.low {
        background-color: green;
    }
</style>

<section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-12 col-xl-10">

                <div class="card">
                    <div class="card-header p-3">
                        <h5 class="mb-0"><i class="fas fa-tasks me-2"></i>Task List</h5>
                    </div>
                    <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">

                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Team Member</th>
                                    <th scope="col">Task</th>
                                    <th scope="col">Priority</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($todo as $todos)
                                <tr class="fw-normal">
                                    <th>
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp"
                                            class="shadow-1-strong rounded-circle" alt="avatar 1"
                                            style="width: 55px; height: auto;">
                                        <span class="ms-2">{{$todos->team_member}}</span>
                                    </th>
                                    <td class="align-middle">
                                        <span>{{$todos->task}}</span>
                                    </td>
                                    {{-- <td class="align-middle">
                                        <h6 class="mb-0"><span class="badge bg-success">{{$todos->priority}}</span></h6>
                                    </td> --}}

                                    <td class="align-middle">
                                        <span class="badge"
                                            style="background-color: {{ $todos->priority === 'high priority' ? 'red' : ($todos->priority === 'low priority' ? 'green' : 'yellow') }}">
                                            {{ $todos->priority }}
                                        </span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="#!" data-mdb-toggle="tooltip" title="Edit"><i
                                                class="bi bi-check-lg"></i></a>
                                        <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                                                class="bi bi-trash3"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                        </table>

                    </div>
                    <div class="card-footer text-end p-3">
                        <button class="me-2 btn btn-link">Cancel</button>

                        <a href="{{route('todo.task',encrypt($todos->todo_id))}}" class="btn btn-primary">Add Task</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



@endsection