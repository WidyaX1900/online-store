<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue Page</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="http://localhost/online-store/resources/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/online-store/resources/css/catalogue.css">
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
    <section class="items mx-auto d-flex flex-column">
        <div class="container content">
            <h1>Product List</h1>
            <div class="col-lg-6 mt-3">
                <form action="" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search product" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
                            <span class="material-symbols-outlined">
                                search
                            </span>
                        </button>
                    </div>
                </form>
            </div>
            <div class="add-product mt-4">
                <button type="button" class="p-3 shadow" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <span class="material-symbols-outlined">
                        add
                    </span>
                    Add Product
                </button>
            </div>
            <div class="category mt-5">
                <div class="d-flex justify-content-between">
                    <div class="link-items">
                        <a href="">JACKET</a>
                    </div>
                    <div class="link-items">
                        <a href="">T-SHIRT</a>
                    </div>
                    <div class="link-items">
                        <a href="">PARFUME</a>
                    </div>
                    <div class="link-items">
                        <a href="">ACCESORIES</a>
                    </div>
                </div>
            </div>
            <div class="goods mt-4 d-flex flex-wrap justify-content-between">
                <div class="good-list border rounded shadow p-2">
                    <img src="{{ asset('storage/img/jacket.jpg') }}" alt="Jacket">
                    <p class="mt-2">Black Coat Jacket</p>
                    <h4>Rp 90.000</h4>
                    <div class="cta-buttons mt-3">
                        <button class="btn btn-info position-relative">
                            <span class="material-symbols-outlined position-absolute top-5">
                                info
                            </span>
                            Product Info
                        </button>
                    </div>
                    <div class="cta-buttons mt-3 d-flex justify-content-between">
                        <button class="btn btn-warning position-relative">
                            <span class="material-symbols-outlined position-absolute top-5">
                                edit
                            </span>
                            Edit
                        </button>
                        <button class="btn btn-danger position-relative">
                            <span class="material-symbols-outlined position-absolute top-5">
                                delete
                            </span>
                            Delete
                        </button>
                    </div>
                </div>
                <div class="good-list border rounded shadow p-2">
                    <img src="{{ asset('storage/img/jacket.jpg') }}" alt="Jacket">
                    <p class="mt-2">Black Coat Jacket</p>
                    <h4>Rp 90.000</h4>
                    <div class="cta-buttons mt-3">
                        <button class="btn btn-info position-relative">
                            <span class="material-symbols-outlined position-absolute top-5">
                                info
                            </span>
                            Product Info
                        </button>
                    </div>
                    <div class="cta-buttons mt-3 d-flex justify-content-between">
                        <button class="btn btn-warning position-relative">
                            <span class="material-symbols-outlined position-absolute top-5">
                                edit
                            </span>
                            Edit
                        </button>
                        <button class="btn btn-danger position-relative">
                            <span class="material-symbols-outlined position-absolute top-5">
                                delete
                            </span>
                            Delete
                        </button>
                    </div>
                </div>
                <div class="good-list border rounded shadow p-2">
                    <img src="{{ asset('storage/img/jacket.jpg') }}" alt="Jacket">
                    <p class="mt-2">Black Coat Jacket</p>
                    <h4>Rp 90.000</h4>
                    <div class="cta-buttons mt-3">
                        <button class="btn btn-info position-relative">
                            <span class="material-symbols-outlined position-absolute top-5">
                                info
                            </span>
                            Product Info
                        </button>
                    </div>
                    <div class="cta-buttons mt-3 d-flex justify-content-between">
                        <button class="btn btn-warning position-relative">
                            <span class="material-symbols-outlined position-absolute top-5">
                                edit
                            </span>
                            Edit
                        </button>
                        <button class="btn btn-danger position-relative">
                            <span class="material-symbols-outlined position-absolute top-5">
                                delete
                            </span>
                            Delete
                        </button>
                    </div>
                </div>
                <div class="good-list border rounded shadow p-2 mt-4">
                    <img src="{{ asset('storage/img/jacket.jpg') }}" alt="Jacket">
                    <p class="mt-2">Black Coat Jacket</p>
                    <h4>Rp 90.000</h4>
                    <div class="cta-buttons mt-3">
                        <button class="btn btn-info position-relative">
                            <span class="material-symbols-outlined position-absolute top-5">
                                info
                            </span>
                            Product Info
                        </button>
                    </div>
                    <div class="cta-buttons mt-3 d-flex justify-content-between">
                        <button class="btn btn-warning position-relative">
                            <span class="material-symbols-outlined position-absolute top-5">
                                edit
                            </span>
                            Edit
                        </button>
                        <button class="btn btn-danger position-relative">
                            <span class="material-symbols-outlined position-absolute top-5">
                                delete
                            </span>
                            Delete
                        </button>
                    </div>
                </div>
                <div class="good-list border rounded shadow p-2 mt-4">
                    <img src="{{ asset('storage/img/jacket.jpg') }}" alt="Jacket">
                    <p class="mt-2">Black Coat Jacket</p>
                    <h4>Rp 90.000</h4>
                    <div class="cta-buttons mt-3">
                        <button class="btn btn-info position-relative">
                            <span class="material-symbols-outlined position-absolute top-5">
                                info
                            </span>
                            Product Info
                        </button>
                    </div>
                    <div class="cta-buttons mt-3 d-flex justify-content-between">
                        <button class="btn btn-warning position-relative">
                            <span class="material-symbols-outlined position-absolute top-5">
                                edit
                            </span>
                            Edit
                        </button>
                        <button class="btn btn-danger position-relative">
                            <span class="material-symbols-outlined position-absolute top-5">
                                delete
                            </span>
                            Delete
                        </button>
                    </div>
                </div>
                <div class="good-list border rounded shadow p-2 mt-4">
                    <img src="{{ asset('storage/img/jacket.jpg') }}" alt="Jacket">
                    <p class="mt-2">Black Coat Jacket</p>
                    <h4>Rp 90.000</h4>
                    <div class="cta-buttons mt-3">
                        <button class="btn btn-info position-relative">
                            <span class="material-symbols-outlined position-absolute top-5">
                                info
                            </span>
                            Product Info
                        </button>
                    </div>
                    <div class="cta-buttons mt-3 d-flex justify-content-between">
                        <button class="btn btn-warning position-relative">
                            <span class="material-symbols-outlined position-absolute top-5">
                                edit
                            </span>
                            Edit
                        </button>
                        <button class="btn btn-danger position-relative">
                            <span class="material-symbols-outlined position-absolute top-5">
                                delete
                            </span>
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="http://localhost/online-store/resources/js/catalogue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>