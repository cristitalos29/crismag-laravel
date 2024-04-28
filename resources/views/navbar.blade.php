<!-- resources/views/navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Crismag</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link btn btn-primary" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary" href="#">About</a>
                </li>
            </ul>
            @guest
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary" href="{{ route('register') }}">Register</a>
                </li>
            </ul>
            @else
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <span class="nav-link">Hello, {{ Auth::user()->first_name }}</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary" href="{{ route('stock') }}">Inventory</a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link">Logout</button>
                    </form>
                </li>
            </ul>
            @endguest
        </div>
    </div>
</nav>
