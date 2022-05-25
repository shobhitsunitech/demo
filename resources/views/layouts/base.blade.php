<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    @livewireStyles
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="/">E-Com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>

                </ul>

                <ul class="navbar-nav ml-auto mb-2 mb-lg-0 ms-lg-4">
                    <form class="d-flex">
                        <button class="btn btn-outline-light" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-white text-dark ms-1 rounded-pill">0</span>
                        </button>


                    </form>

                    @if (Route::has('login'))

                        @auth
                            @auth
                                @if (Auth::user()->utype === 'ADM')
                                    {{-- //admin --}}
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">My Account</a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="">{{ Auth::user()->name }}</a></li>

                                            <li>
                                                <hr class="dropdown-divider" />
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard1</a></li>
                                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefaul(); document.getElementByID('logout-form').submit();">Logout</a></li>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>

                                        </ul>
                                    </li>

                                    @else
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Account ({{ Auth::user()->name }})</a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="{{ route('user.dashboard') }}">User Dashboard</a></li>
                                            <li>
                                                <hr class="dropdown-divider" />
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefaul(); document.getElementByID('logout-form').submit()">Logout</a></li>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>
                                        </ul>
                                    </li>



                                @endif

                            @endauth

                            @else

                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a></li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('register') }}">Register</a></li>
                        @endauth

                    @endif





                </ul>



            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Shop in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    {{ $slot }}

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Ecom-Website 2022</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
    @livewireScripts
</body>

</html>
