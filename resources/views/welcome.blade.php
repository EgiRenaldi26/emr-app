<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div class="d-flex flex-column justify-content-center align-items-center min-vh-100 bg-gray-100">
    <div class="max-w-md w-full">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <h3 class="h3 mb-3 text-center"><strong> Electronic Medical Record</strong></h3>
                <div style="text-align: center;"> <!-- Tambahkan ini -->
                    <img src="{{ asset('dist/img/Electronic medical record.png')}}" style="height: 200px;" alt="ini poto">
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" id="password" name="password" class="form-control" required>
                            <button type="button" class="btn btn-light" id="togglePassword">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div><br>
                    
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Script to toggle password visibility -->
<script>
    const togglePassword = document.querySelector("#togglePassword");
    const passwordInput = document.querySelector("#password");

    togglePassword.addEventListener("click", function () {
        const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
        passwordInput.setAttribute("type", type);
        this.querySelector("i").classList.toggle("fa-eye");
        this.querySelector("i").classList.toggle("fa-eye-slash");
    });
</script>

</body>
</html>
