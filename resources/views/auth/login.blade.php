<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ config('app.url').'/online-store/resources/css/bootstrap.css' }}">
    <link rel="stylesheet" href="{{ config('app.url').'/online-store/resources/css/login.css' }}">
    <link rel="icon" href="{{ asset('storage/img/logo.png') }}">
</head>
<body>
    <section class="container vh-100 d-flex align-items-center justify-content-center">
        <div class="login-form shadow p-4 rounded-4">
            @if (session()->has('registered'))
                <div class="alert alert-success">
                    {{ session()->get('registered') }}
                </div>
            @endif
            <div class="logo mx-auto">
                <img src="{{ asset('storage/img/logo.png') }}" alt="brand logo">
            </div>
            <form action="/login" method="post" class="d-flex flex-column mt-4">
                @csrf
                <div class="mb-4">
                  <label for="email" class="form-label">Email address  </label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" autocomplete="off">
                </div>
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-danger">{{ $error }}</li>    
                        @endforeach
                    </ul>
                @endif
                <div class="mb-4">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-4 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Keep me logged in</label>
                </div>
                <button type="submit" class="login-button p-2 rounded shadow">Login</button>
            </form>
            <div class="mt-5 mx-auto register-link">
                <span>Don't have an account?</span> <a href="/register/buyer">Register here</a>
            </div>
        </div>
    </section>
</body>
</html>