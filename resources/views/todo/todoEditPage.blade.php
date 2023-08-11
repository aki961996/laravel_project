@extends('layouts/master')
@section('title','Todo-Edit')
@section('content')
<div class="d-flex justify-content-end mb-2 px-2">
    <a href="{{route('todo')}}" class="btn btn-dark ">Back</a>
</div>

<div class="container">

    <form action="{{route('todo-update')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <input type="hidden" name="todo_id" value="{{encrypt($todo->todo_id)}}" class="form-control">
        </div>


        <div class="form-group">
            <label>Team Member</label>
            <input type="text" value="{{$todo->team_member}}" name="team_member" class="form-control">

        </div>

        <div class="form-group">
            <label>Task</label>
            <input type="text" value="{{$todo->task}}" name="task" class="form-control">

        </div>
        {{-- <div class="form-group">
            <label>Priority</label>
            <input type="text" name="priority" class="form-control">
            @error('priority')
            <div class="alert-danger">{{$message}}</div>

            @enderror
        </div> --}}

        <div class="form-group d-flex flex-column">
            <label>Image</label>
            <img style='width:100px;' src="{{ asset('storage/images/' . $todo->images) }}" alt="">
            <input type="file"  name="image" class="form-control">
            @error('image')
            <div class="alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>status</label>
            <select class="form-control" value="{{$todo->priority}}" name="priority">
                <option value="high priority">high priority</option>
                <option value="low priority:">low priority:</option>
            </select>

        </div>
        {{-- image --}}

        {{-- <label class="block mb-4">
            <span class="sr-only">Choose File</span>
            <input type="file" name="image" class="" />
            <div>
                @error('image')
                <span class="alert-danger">{{ $message }}</span>
                @enderror
            </div>

        </label> --}}
        {{-- <div class="form-group">
            <label>Image:</label>
            <input type="file" name="image" class="form-control-file">
            <div>
                @error('image')
                <span class="alert-danger">{{ $message }}</span>
                @enderror
            </div>
        </div> --}}

        <div class="form-group">
            <button type="submit" class="btn btn-info btn-block">Update</button>
            {{-- <button type="submit" class="btn btn-info btn-block">Add Data</button> --}}

        </div>


    </form>

</div>



@endsection