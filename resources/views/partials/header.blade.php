<nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
    <div class="container ml-3">
        <a class="navbar-brand">
            {{ config('app.name', 'Car Rental Services') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('company') }}">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('contact') }}">Contact Us</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav d-flex align-items-center">
                @auth
                    <li class="nav-item">
                        <a class="nav-link text-info" href="{{ route('brands.index') }}">Brand</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info" href="{{ route('car_model.index') }}">Model</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info" href="{{ route('clients.index') }}">Client</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info" href="{{ route('car') }}">View Details</a>
                    </li>
                    <li>
                        <a class="nav mx-4 text-info"><strong>{{ auth()->user()->name }}</strong></a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="post" class="">
                            @csrf
                            <button class="btn btn-dark" type="submit">Logout</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
