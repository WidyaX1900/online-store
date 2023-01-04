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
                <button type="button">
                    <span class="material-symbols-outlined">
                        shopping_cart
                    </span>
                    Add to cart
                </button>
            </div>
        </div>
    </section>
@endsection
