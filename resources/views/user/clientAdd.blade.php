@extends('layouts/master')
@section('title','Investors')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            <div class="d-flex justify-content-end mb-2 px-2">
                <a href="{{route('user.investors')}}" class="btn btn-dark ">Back</a>
            </div>

            <form action="{{route('client.store')}}" method="POST" id="" name="clientStore">
                @csrf
                <div class="form-group">
                    <label>Fisrt Name</label>
                    <input type="text" name="name" class="form-control">
                    @error('name')
                    <div class="alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lname" class="form-control">
                    @error('lname')
                    <div class="alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control">
                    @error('email')
                    <div class="alert-danger">{{$message}}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label>phone number</label>
                    <input type="number" name="phone_number" class="form-control">
                    @error('phone_number')
                    <div class="alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Street</label>
                    <input type="text" name="Street" class="form-control">
                    @error('Street')
                    <div class="alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>apartment</label>
                    <input type="text" name="apartment" class="form-control">
                    @error('apartment')
                    <div class="alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>city</label>
                    <input type="text" name="city" class="form-control">
                    @error('city')
                    <div class="alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>state</label>
                    <input type="text" name="state" class="form-control">
                    @error('state')
                    <div class="alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>pin</label>
                    <input type="text" name="zip_code" class="form-control">
                    @error('zip_code')
                    <div class="alert-danger">{{$message}}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label>status</label>
                    <select class="form-control" name="status">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    @error('status')
                    <div class="alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info btn-block">Add Data</button>

                </div>
            </form>



        </div>
    </div>
</div>


@endsection