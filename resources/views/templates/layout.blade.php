<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('header') Page</title>
    <link rel="icon" href="{{ asset('storage/img/logo.png') }}">
    <link rel="stylesheet" href="{{ config('app.url').'/online-store/resources/css/bootstrap.css' }}">
    <link rel="stylesheet" href="@yield('style')">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
</head>
<body>
    <nav class="d-flex">
        <div class="navigation d-flex justify-content-between align-items-center">
            <div class="hamburger-icon d-flex flex-column align-items-center justify-content-evenly" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="logout-container d-flex justify-content-between align-items-center">
                <a href="">
                    <span class="material-symbols-outlined">
                        shopping_cart
                    </span>
                </a>
                <button type="button">Logout</button>
            </div>
        </div>
    </nav>
    <aside class="sidebar vh-100">
        <div class="sidebar-menus">
            <div class="logo">
                <img src="{{ asset('storage/img/logo-white.png') }}" alt="brand logo" class="d-block mx-auto">
            </div>
            <div class="links mx-auto mt-3">
                <a href="/product" class="text-decoration-none">
                    <div class="product link mx-auto d-flex align-items-center">
                        <span class="material-symbols-outlined">
                            inventory_2
                        </span>
                        <div class="link-label">
                            Product
                        </div>
                    </div>
                </a>
                <a href="" class="text-decoration-none">
                    <div class="transaction link mx-auto d-flex align-items-center">
                        <span class="material-symbols-outlined">
                            receipt_long
                        </span>
                        <div class="link-label">
                            Transaction
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="close-button d-flex justify-content-center">
            X
        </div>
    </aside>
    @yield('content')
</body>
<script src="http://localhost/online-store/resources/js/catalogue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>