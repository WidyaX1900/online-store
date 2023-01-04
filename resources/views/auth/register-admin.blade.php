<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="icon" href="img/logo.png">
</head>
<body>
    <section class="container vh-100 d-flex align-items-center justify-content-center p-5">
        <div class="login-form shadow p-4 rounded-4">
            <div class="logo mx-auto">
                <img src="img/logo.png" alt="brand logo">
            </div>
            <form action="" method="" class="d-flex flex-column mt-4">
                <div class="mb-4">
                  <label for="name" class="form-label">Your name</label>
                <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-4">
                  <label for="employee_id" class="form-label">Employee ID</label>
                  <input type="text" class="form-control" id="employee_id" name="employee_id">
                </div>
                <div class="mb-4">
                  <label for="email" class="form-label">E-mail</label>
                  <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-4">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-4">
                  <label for="confirm_password" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                </div>
                <button type="submit" class="login-button p-2 rounded shadow">Register</button>
            </form>
            <div class="mt-3 mx-auto register-link">
                <span>Already have an account?</span> <a href="#">Login here</a>
            </div>
        </div>
    </section>
</body>
</html>