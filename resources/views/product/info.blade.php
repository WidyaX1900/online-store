@extends('templates.layout')
@section('header', 'Product Info')
@section('style')
    {{ config('app.url').'/online-store/resources/css/product-show.css' }}
@endsection

@section('content')
    <section class="container mx-auto d-inline">
        <div class="info d-flex justify-content-between">
            <div class="product-image">
                <img src="{{ asset('storage/products/' . $product->photo) }}" alt="Jacket">
            </div>
            <div class="product-desc">
                <h2>{{ $product->name }}</h2>
                <p>Rp {{ $product->cost }}</p>
                <p>
                    Category:
                    @php
                        echo ucwords($product->category->name);
                    @endphp
                </p>
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
                <button type="button" data-bs-toggle="modal" data-bs-target="#cartModal">
                    <span class="material-symbols-outlined">
                        shopping_cart
                    </span>
                    Add to cart
                </button>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="cartModalLabel">Add to Cart</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="cart-form">
                    <form action="" method="post">
                        @csrf
                        <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="buyer_id" id="buyer_id" value="{{ Auth::user()->id }}">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Product Name</label>
                                <input type="text" id="name" class="form-control" readonly value="{{ $product->name }}">   
                            </div>
                            <div class="mb-3">
                                <label for="cost" class="form-label">Cost</label>
                                <input type="text" id="cost" class="form-control" readonly name="cost" value="{{ $product->cost }}">   
                            </div>
                            <div class="mb-3">
                                <label for="purchase_amount" class="form-label">Purchase Amount</label>
                                <input type="text" id="purchase_amount" class="form-control" readonly name="purchase_amount">   
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outlined-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add to cart</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection
