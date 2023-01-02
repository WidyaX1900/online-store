<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Info Page</title>
    <link rel="icon" href="{{ asset('storage/img/logo.png') }}">
    <link rel="stylesheet" href="{{ config('app.url').'/online-store/resources/css/bootstrap.css' }}">
    <link rel="stylesheet" href="{{ config('app.url').'/online-store/resources/css/product-show.css'}}">
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
                <img src="img/logo-white.png" alt="brand logo" class="d-block mx-auto">
            </div>
            <div class="links mx-auto mt-3">
                <a href="" class="text-decoration-none">
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
    <section class="container mx-auto d-inline">
        <div class="info d-flex justify-content-between">
            <div class="product-image">
                <img src="{{ asset('storage/products/'.$product->photo) }}" alt="Jacket">
            </div>
            <div class="product-desc">
                <h2>{{ $product->name }}</h2>
                <p>Rp {{ $product->cost }}</p>
                <p>Category: Jacket</p>
                <p>Stock: {{ $product->qty }}</p>
                <p>
                    <strong>Purchase amount</strong>
                </p>
                <div class="col-lg-7 mb-5">
                    <select class="form-select" aria-label="Default select example">
                        @for ($i = 1; $i <= $product->qty; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                      </select>                    
                </div>
                <button type="button">Buy Now</button>
                <button type="button">
                    <span class="material-symbols-outlined">
                        shopping_cart
                    </span>
                    Add to cart
                </button>
            </div>
        </div>
    </section>
</body>
<script src="js/catalogue.js"></script>
</html>