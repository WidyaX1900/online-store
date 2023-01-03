@extends('templates.layout')
@section('header', 'Product')
@section('style')
    {{ config('app.url') . '/online-store/resources/css/catalogue.css' }}
@endsection

@section('content')
    <section class="items mx-auto d-flex flex-column">
        <div class="container content">
            @if (session()->has('status'))
                <div class="alert alert-success">
                    <strong>{{ session()->get('result') }}</strong> {{ session()->get('action') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h1>Product List</h1>
            <div class="col-lg-6 mt-3">
                <form action="/product/search" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search product"
                            aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
                            <span class="material-symbols-outlined">
                                search
                            </span>
                        </button>
                    </div>
                </form>
            </div>
            <div class="add-product mt-4">
                <button type="button" class="p-3 shadow" data-bs-toggle="modal" data-bs-target="#exampleModal" id="add-product">
                    <span class="material-symbols-outlined">
                        add
                    </span>
                    Add Product
                </button>
            </div>
            <div class="category mt-5">
                <div class="d-flex justify-content-between">
                    @foreach ($category as $categories)
                        <div class="link-items">
                            @if ($categories->id === 1)
                                <a href="/product">
                                    @php
                                        echo strtoupper($categories->name);
                                    @endphp
                                </a>
                            @else
                                <a href="/product?category={{ $categories->id }}">
                                    @php
                                        echo strtoupper($categories->name);
                                    @endphp
                                </a>
                            @endif
                        </div>                        
                    @endforeach
                </div>
            </div>
            <div class="goods mt-5 d-flex flex-wrap justify-content-between">
                @foreach ($products as $product)
                    <div class="good-list border rounded shadow p-2">
                        <img src="{{ asset('storage/products/' . $product->photo) }}" alt="Jacket">
                        <p class="mt-2">{{ $product->name }}</p>
                        <h4>Rp {{ $product->cost }}</h4>
                        <div class="cta-buttons mt-3">
                            <button class="btn btn-info position-relative info-product" data-id="{{ $product->id }}">
                                <span class="material-symbols-outlined position-absolute top-5">
                                    info
                                </span>
                                Product Info
                            </button>
                        </div>
                        <div class="cta-buttons mt-3 d-flex justify-content-between">
                            <button class="btn btn-warning position-relative edit-product" data-id="{{ $product->id }}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <span class="material-symbols-outlined position-absolute top-5">
                                    edit
                                </span>
                                Edit
                            </button>
                                <button class="btn btn-danger position-relative delete-product" data-id="{{ $product->id }}">
                                    <span class="material-symbols-outlined position-absolute top-5">
                                        delete
                                    </span>
                                    Delete
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalLabel">Add Product</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div id="product-form">
                        <form action="/product/store" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="oldFile" id="oldFile">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="cost" class="form-label">Cost</label>
                                    <input type="text" class="form-control" id="cost" name="cost">
                                </div>
                                <div class="mb-3">
                                    <label for="category_id" class="form-label">Category</label>
                                    <select class="form-select" aria-label="Default select example" name="category_id"
                                        id="category_id">
                                        @foreach ($category as $categories)
                                            <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="qty" class="form-label">Qty</label>
                                    <input type="number" class="form-control" id="qty" name="qty">
                                </div>
                                <div class="mb-3">
                                    <label for="photo" class="form-label">Product's Photo</label>
                                    <input type="file" class="form-control" id="photo" name="photo">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary action-btn">Add Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
