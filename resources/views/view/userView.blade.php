@extends('layouts/master')
@section('title','View')
@section('content')

<section>

    <div class="container py-4">
        <div class="row">
            <div class="col-lg-6  mt-5">
                <div class="card mb-4">
                    <div class="card-body">
                        <h3>User Details</h3>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Full Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->name}}</p>
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
                                <p class="mb-0">Date Of Birth</p>
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
                        {{-- relation ship start --}}

                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->address->address_line_1}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">City</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->address->city}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">State</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->address->state}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Post Code</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->address->post_code}}</p>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <div class="col-lg-6 mt-5">

                <table class="table">

                    <thead>
                        <h3>User Orders</h3>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Price</th>
                            <th scope="col">status</th>
                            <th scope="col">placed at</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user->orders as $orders)
                        <tr>
                            <th scope="row">{{$orders->order_id}}</th>
                            <td>{{number_format($orders->price,2)}}</td>
                            <td>{{$orders->status_text}}</td>
                            <td>{{$orders->created_at}}</td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</section>


@endsection