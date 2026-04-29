<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Prime</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}?v=1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="hold-transition login-page">

<div class="login-box">
    <div class="card login-card floating-card">
        <div class="card-body login-card-body">

            <div class="text-center mb-5">
                <h1 class="logo-text">pr<span class="dot-i">i</span>me</h1>
                <p class="sub-logo">PIONEIRA EM SOLUÇÕES<br>INOVADORAS DE PROTEÍNAS</p>
            </div>

            @if(session('erro'))
                <div class="alert alert-danger py-2 mb-4" style="border-radius: 12px; font-size: 14px;">
                    <i class="fas fa-exclamation-circle mr-2"></i> {{ session('erro') }}
                </div>
            @endif

            <form action="{{ route('login.auth') }}" method="POST">
                @csrf

                <div class="form-group mb-4">
                    <label class="label-custom">Digite o seu Email</label>
                    <div class="custom-field-container">
                        <span class="custom-icon-box">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <input type="email" name="email" class="custom-input-field" placeholder="........" required>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label class="label-custom">Senha</label>
                    <div class="custom-field-container">
                        <span class="custom-icon-box">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input type="password" name="password" class="custom-input-field" placeholder="........" required>
                    </div>
                </div>

                <div class="mb-4 d-flex align-items-center">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="remember" name="remember">
                        <label for="remember" class="custom-control-label check-label">
                            Lembrar-me por 30 dias
                        </label>
                    </div>
                </div>

                <div class="login-btn-container">
                    <button type="submit" class="btn login-btn">
                        Entrar na conta
                    </button>
                </div>

            </form>
        </div>
    </div>

    <p class="text-center mt-4 copyright">
        © Prime
    </p>
</div>

</body>
</html>