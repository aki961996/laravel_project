@extends('layouts/master')
@section('title','Investors')
@section('content')

<body>
    <div class="container mt-5">

        <div class="d-flex justify-content-end mb-2 px-2">
            <a href="{{route('user.borrowers')}}" class="btn btn-dark ">Back</a>
        </div>
        <form id="ajax-form" action="{{ route('borrower.store') }}" class="form-horizontal">
            @csrf
            <div class="row">
                <div class="col-6">
                    <label for="exampleInputEmail1">Firts Name </label>
                    <input type="text" name="first_name" class="form-control" placeholder="">
                    <span class="text-danger print-error-msg" style="display:none;"></span>
                </div>
                <div class="col-6">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" name="last_name" class="form-control" placeholder=" ">
                    <span class="text-danger print-error-msg" style="display:none;"></span>

                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label>gender</label>
                    <div class="form-check">
                        <input class="form-check-input" name="gender" type="radio" id="male" value="male">
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="gender" type="radio" id="female" value="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <span class="text-danger print-error-msg" style="display:none;"></span>
                </div>
                <div class="col-6">
                    <label for="exampleInputEmail1">Date Of Birth</label>
                    <input name="date_of_birth" type="date" class="form-control">
                    <span class="text-danger print-error-msg" style="display:none;"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="exampleInputEmail1"> Mesage</label>
                    <textarea name="msg" class="form-control"></textarea>
                    <span class="text-danger print-error-msg" style="display:none;"></span>
                </div>

            </div>
            <div class="row">

                <div class="col-6">
                    <label for="exampleInputEmail1">Football Team</label>

                    <select class="form-control" name="team">
                        @foreach($borrower as $bo)
                        <option>{{$bo->teams}}</option>
                        @endforeach
                    </select>
                    <span class="text-danger print-error-msg" style="display:none;"></span>
                </div>

            </div>
            <div class="row">
                <div class="col-12 mt-3">
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-dark"> submit</button>
                </div>
            </div>
        </form>
    </div>
    {{-- Pagination --}}

</body>




</html>

@endsection