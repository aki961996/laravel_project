<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route ('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route ('about')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route ('contact')}}">Contact</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Users
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route ('user.investors')}}">Investers</a>
                    <a class="dropdown-item" href="{{route('user.borrowers')}}">Borrowers</a>
                    <div class="dropdown-divider">Brokers</div>
                    <a class="dropdown-item" href="#">Vendors </a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route ('todo')}}">Todo</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
            </li> --}}
        </ul>
    </div>
</nav>