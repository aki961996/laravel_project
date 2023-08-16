@extends('layouts/master')
@section('title','Borrowers-edit')
@section('content')



<div class="container mt-5">

    <div class="d-flex justify-content-end mb-2 px-2">
        <a href="{{route('user.borrowers')}}" class="btn btn-dark ">Back</a>
    </div>
    <form action="{{route('borrower.update')}}" method="post">
        @csrf
        <div>
            <input type="hidden" value="{{encrypt($borrower->borrower_id)}}" name="borrower_id" class="form-control">
        </div>
        <div class="row">
            <div class="col-6">
                <label for="exampleInputEmail1">Firts Name </label>
                <input type="text" value="{{$borrower->first_name}}" name="first_name" class="form-control"
                    placeholder="">
                <span class="text-danger print-error-msg" style="display:none;"></span>
            </div>
            <div class="col-6">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" value="{{$borrower->last_name}}" name="last_name" class="form-control"
                    placeholder=" ">
                <span class="text-danger print-error-msg" style="display:none;"></span>

            </div>
        </div>
        <div class="row">
            <div class="col-6">
                {{-- <label>gender</label>
                <div class="form-check">
                    <input class="form-check-input" value="{{$borrower->gender}}" @if ($borrower->gender == "male")
                    checked @endif name="gender" type="radio" id="male">
                    <label class="form-check-label">Male</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="{{$borrower->gender}}" @if ($borrower->gender == "female")
                    checked @endif name="gender" type="radio"
                    id="female">
                    <label class="form-check-label" for="female">Female</label>
                </div>
                <span class="text-danger print-error-msg" style="display:none;"></span> --}}

                <label>Select Gender:</label><br>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="maleRadio" value="male" @if ($borrower->gender ===
                    'male') checked @endif>
                    <label class="form-check-label" for="maleRadio">Male</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="femaleRadio" value="female" @if ($borrower->gender ===
                    'female') checked @endif>
                    <label class="form-check-label" for="femaleRadio">Female</label>
                </div>
            </div>
            <div class="col-6">
                <label for="exampleInputEmail1">Date Of Birth</label>
                <input name="date_of_birth" value="{{$borrower->date_of_birth}}" type="date" class="form-control">
                <span class="text-danger print-error-msg" style="display:none;"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="exampleInputEmail1"> Mesage</label>
                {{-- <textarea name="msg" value="" class="form-control"></textarea> --}}
                <textarea name="msg" class="form-control" rows="5">{{$borrower->msg}}</textarea>
                <span class="text-danger print-error-msg" style="display:none;"></span>
            </div>

        </div>
        <div class="row">

            <div class="col-6">
                <label for="exampleInputEmail1">Football Team</label>

                <select value="" class="form-control" name="team">
                    {{-- @foreach ($borrower as $team)
                    <option value="{{ $team }}" @if ($team=="Team E" ) selected @endif>{{ $team }}</option>
                    @endforeach --}}

                    <option value="{{$borrower->teams}}">
                        {{$borrower->teams}}
                    </option>

                </select>
                <span class="text-danger print-error-msg" style="display:none;"></span>
            </div>

        </div>
        <div class="row">
            <div class="col-12 mt-3">

                <button type="submit" class="btn btn-dark"> submit</button>
            </div>
        </div>
    </form>
</div>
{{-- Pagination --}}

@endsection