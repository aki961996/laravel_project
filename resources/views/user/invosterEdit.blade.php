@extends('layouts/master')
@section('title','Edit')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3 mt-3">
            {{-- ajax update --}}
            <form action="{{route('update.invoster')}}" method="POST">
                @csrf

                <div class="d-flex justify-content-end mb-2 px-2">
                    <a href="{{route('user.investors')}}" class="btn btn-dark ">Back</a>
                </div>

                <div class="form-group">
                    <input type="hidden" value="{{encrypt($client->client_id)}}" name="client_id" class="form-control">
                </div>

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="{{$client->first_name}} " class="form-control">
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lname" value="{{$client->last_name}} " class="form-control">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="{{$client->email}}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="number" name="phone_number" value="{{$client->phone_number}}" class="form-control">
                </div>

                <div class="form-group">
                    <label>status</label>
                    {{-- value 1 vann active selectil --}}
                    <select class="form-control" value="{{$client->status}}" name="status">
                        <option class="row px-5 mt-1" value="1" @if($client->status ==1)selected="selected"
                            @endif>Active
                        </option>
                        <option class="row px-5 mt-1" value="0" @if($client->status ==0)selected="selected" @endif>
                            Inactive
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info btn-block">Update Form</button>
                    <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection