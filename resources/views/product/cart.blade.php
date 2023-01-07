@extends('templates.layout')
@section('header', 'Product Info')
@section('style')
    {{ config('app.url').'/online-store/resources/css/carts.css' }}
@endsection

@section('content')
    <section class="container mx-auto d-inline">
        <div class="shopping">
            <h1>Your Shopping, {{ Auth::user()->name }}</h1>
            @foreach ($carts as $cart)
                <div class="items d-flex justify-content-between mt-4">
                    <div class="items-image">
                        <img src="{{ asset('storage/products/'.$cart->product->photo) }}" alt="jacket">
                    </div>
                    <div class="items-desc d-flex align-items-center">
                        <ul class="d-flex justify-content-between">
                            <li class="mb-4">
                                <div>
                                    <strong>Product Name:</strong>
                                </div>
                                <span>
                                    {{ $cart->product->name }}
                                </span>
                            </li>
                            <li class="mb-4">
                                <div>
                                    <strong>Quantity:</strong>
                                </div>
                                <span>
                                    {{ $cart->purchase_amount }}
                                </span>
                            </li>
                            <li class="mb-4">
                                <div>
                                    <strong>Cost:</strong>
                                </div>
                                <span>
                                    Rp {{ $cart->cost }}
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>                
            @endforeach
            <div class="checkout shadow rounded-4 position-fixed p-4">
                <h3>Total cost</h3>
                <p>
                    <strong>Rp 360.000</strong>
                </p>
                <button type="button" class="p-3">Pay Now</button>
            </div>
        </div>
    </section>
@endsection
