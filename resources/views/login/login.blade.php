<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Signika+Negative&family=Unbounded:wght@300&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        *
        {
            font-family: 'Signika Negative', sans-serif;
        }
        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(180deg, rgb(106.25, 142.37, 212.5) 3.71%, rgb(255, 255, 255) 100%);
        }
    </style>
</head>
<body class="antialiased">
<div class="d-flex flex-column justify-content-center align-items-center min-vh-100 bg-gray-100">
    <div class="max-w-md w-full">
            <div class="card-body p-4">
                <div style="text-align: center;"> <!-- Tambahkan ini -->
                    <img src="{{ asset('dist/img/Electronic medical record.png')}}" style="height: 200px;" alt="ini poto">
                    <h3 class="h3 mt-3 text-center"><strong> Electronic Medical Record</strong></h3>
                </div>
                <form method="POST" action="{{ route('login.prosses') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="username" id="username" name="username" class="form-control" 
                        @error('username')
                            is-invalid
                        @enderror
                        value="{{ old('username')}}" required autofocus>

                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" id="password" name="password" class="form-control"
                            @error('password')
                                is-invalid
                            @enderror
                            value="{{ old('password')}}" required>
                            <button type="button" class="btn btn-light" id="togglePassword">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message}}
                            </div>
                        @enderror
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