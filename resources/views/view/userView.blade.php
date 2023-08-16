@extends('layouts/master')
@section('title','View')
@section('content')

<section style="background-color: #eee;">

    <div class="container py-5">
        {{-- <div class="container">
            <ul>
                <li>{{$user->name}}</li>
                <li>{{$user->email}}</li>
                <li>{{$user->date_of_birth_formated}}</li>
                <li>{{$user->status_text}}</li>
            </ul>
            <hr>
            <ul>
                <li>{{$user->address->address_line_1}}</li>
                <li>{{$user->address->city}}</li>
                <li>{{$user->address->post_code}}</li>
                <li>{{$user->address->state}}</li>
            </ul>
        </div> --}}


        <div class="row">

            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Full Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">J{{$user->name}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->email}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Dob</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->date_of_birth_formated}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Status</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->status_text}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->address->address_line_1}}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection