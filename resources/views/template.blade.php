<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/template.css') }}">
    <link rel="icon" href="{{ Storage::url('images/logo.png') }}">
    @yield('css')
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid px-4 py-3">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="{{ Storage::url('images/header_logo.png') }}" style="width: 200px;" alt=""></a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a id="btn-shop" role="button" class="btn btn-primary nav-link px-4" href="/products">Shop Now</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex flex-row align-items-center">
                <form action="/search" class="d-flex" role="search">
                    <div class="d-flex flex-row align-items-center search-form">
                        <input id="search-bar" class="form-control" type="search" name="search" placeholder="Search our products" aria-label="Search" value="@yield('search')">
                    </div>
                </form>
                <div class="dropdown mx-4">
                    <div type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                        </svg>
                    </div>
                    <ul class="dropdown-menu dropdown-menu-end mt-3">
                        @auth
                        <li>
                            <a class="dropdown-item" href="/logout">Logout</a>
                        </li>
                        @else
                        <li>
                            <a class="dropdown-item" href="/login">Login</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/register">Register</a>
                        </li>
                        @endauth
                    </ul>
                </div>
                @auth
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-item" href="/cart">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                            </svg>
                        </a>
                    </li>
                </ul>
                @endauth
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h6 class="text-uppercase font-weight-bold">TechSupply</h6>
                    <p>Your one stop solution for electronics.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam suscipit, officia consectetur aliquam nobis atque necessitatibus optio nulla inventore quos autem similique deserunt exercitationem voluptas illum blanditiis id provident? Praesentium!</p>
                </div>
                <div>
                    <div class="footer-copyright text-center">TechSupply © 2021 Copyright</div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>