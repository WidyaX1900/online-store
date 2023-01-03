<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete product</title>
    <link rel="stylesheet" href="{{ config('app.url').'/online-store/resources/css/bootstrap.css' }}">
    <link rel="icon" href="{{ asset('storage/img/logo.png') }}">
</head>
<body>
    <div class="container mt-5">
        <h1>
            Are you sure want to delete this product?
        </h1>
        <h2>{{ $product->name }}</h2>
        <form action="/product/destroy/{{ $product->id }}" method="post">
            @csrf
            @method('DELETE')
            <div class="mt-4">
                <a href="/product">
                    <button type="button" class="btn btn-outline-secondary">Cancel</button>
                </a>
                <button type="submit" class="btn btn-danger">Delete</button>                
            </div>
        </form>
    </div>
</body>
</html>