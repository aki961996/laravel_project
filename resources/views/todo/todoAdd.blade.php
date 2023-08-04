@extends('layouts/master')
@section('title','Todo Add')
@section('content')
<div class="d-flex justify-content-end mb-2 px-2">
    <a href="{{route('todo')}}" class="btn btn-dark ">Back</a>
</div>

<div class="container">

    <form action="" method="POST" id="todo_add" name="todo_add">
        @csrf


        <div class="form-group">
            <label>Team Member</label>
            <input type="text" name="team_member" class="form-control">
            @error('team_member')
            <div class="alert-danger">{{$message}}</div>

            @enderror
        </div>

        <div class="form-group">
            <label>Task</label>
            <input type="text" name="task" class="form-control">
            @error('task')
            <div class="alert-danger">{{$message}}</div>

            @enderror
        </div>
        <div class="form-group">
            <label>Priority</label>
            <input type="text" name="priority" class="form-control">
            @error('priority')
            <div class="alert-danger">{{$message}}</div>

            @enderror
        </div>
        {{-- image --}}

        <label class="block mb-4">
            <span class="sr-only">Choose File</span>
            <input type="file" name="image"
                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
            @error('image')
            <span class="alert-danger">{{ $message }}</span>
            @enderror
        </label>








        <div class="form-group">
            <button type="submit" class="btn btn-info btn-block">Add Data</button>
            <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
        </div>


    </form>

</div>



@endsection