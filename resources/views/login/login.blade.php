<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Sign In</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/floating-labels/">
    <!-- Bootstrap core CSS -->
    {{--
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">



    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-sm-5">
                <h2 class="mb-4">Sign In</h2>

                <form action="{{route('do.login')}}" method="post" class="form-signin">

                    @csrf
                    {{-- user invlid msg --}}
                    <div>
                        @if($msg= Session::get('message'))
                        <div class="alert alert-danger">
                            <p class="mb-0">{{ $msg }}</p>
                        </div>
                        @endif
                    </div>
                    {{-- logout msg --}}
                    <div>
                        @if($msg= Session::get('logout'))
                        <div class="alert alert-success">
                            <p class="mb-0">{{ $msg }}</p>
                        </div>
                        @endif
                    </div>


                    <div class="form-label-group">
                        <input type="email" class="form-control" name="email" placeholder="Email address" required>
                        <label>Email address</label>
                    </div>

                    <div class="form-label-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        <label>Password</label>
                    </div>

                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>

                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

                </form>
            </div>
        </div>
    </div>



</body>

</html>