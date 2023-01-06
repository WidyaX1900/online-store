<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="{{ config('app.url') . '/online-store/resources/css/bootstrap.css' }}">
    <link rel="stylesheet" href="{{ config('app.url') . '/online-store/resources/css/register.css' }}">
    <link rel="icon" href="{{ asset('storage/img/logo.png') }}">
</head>

<body>
    <section class="container vh-100 d-flex align-items-center justify-content-center">
        <div class="login-form shadow p-4 rounded-4">
            <div class="logo mx-auto">
                <img src="{{ asset('storage/img/logo.png') }}" alt="brand logo">
            </div>
            <form action="/register/buyer" method="post" class="d-flex flex-column mt-4">
                @csrf
                <div class="mb-4">
                    <label for="name" class="form-label">Your name</label>
                    <input type="text" class="form-control" id="name" name="name" maxlength="10"
                        class="@error('name') is-invalid @enderror">

                    @error('name')
                        <p class="text-danger">
                            <em>*{{ $message }}</em>
                        </p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email"
                        class="@error('email') is-invalid @enderror">

                    @error('email')
                        <p class="text-danger">
                            <em>*{{ $message }}</em>
                        </p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        class="@error('password') is-invalid @enderror">

                    @error('password')
                        <p class="text-danger">
                            <em>*{{ $message }}</em>
                        </p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" class="@error('confirm_password') is-invalid @enderror">

                    @error('confirm_password')
                        <p class="text-danger">
                            <em>*{{ $message }}</em>
                        </p>
                    @enderror

                    @if (session()->has('passerror'))
                        <p class="text-danger">
                          <em>*{{ session()->get('passerror') }}</em>
                        </p>
                    @endif
                </div>
                <button type="submit" class="login-button p-2 rounded shadow">Register</button>
            </form>
            <div class="mt-3 mx-auto register-link">
                <span>Already have an account?</span> <a href="/login">Login here</a>
            </div>
        </div>
    </section>
</body>

</html>
