<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PrimeCater</title>

<link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">

@vite('resources/css/app.css')

</head>

<body class="hold-transition">

<div class="container-fluid">
    <div class="row vh-100">

    <div class="col-md-9 p-0">
        <img src="{{ asset('images/carne.jpg') }}" class="w-100 h-100 img-cover" alt="Imagem de fundo">
    </div>
    
    <div class="col-md-3 d-flex align-items-center justify-content-center bg-black text-white">
        <div class="login-box-custom">

            <div class="text-center mb-4">
                <img src="{{ asset('images/logo.png') }}" class="logo" alt="Logo">
            </div>

            <h4 class="text-center">Bem-Vindo!</h4>
            <p class="text-center text-muted small">Faça login de acesso para sua conta</p>

            <form method="POST" action="/login">
                @csrf

                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control custom-input" placeholder="seu@email.com" required>
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control custom-input" placeholder="********" required>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="remember">
                    <label class="form-check-label small" for="remember">
                        Lembrar-me por 30 dias
                    </label>
                </div>

                <button type="submit" class="btn btn-block btn-custom">
                    Entrar na conta
                </button>

            </form>

            <p class="text-center mt-3 small text-muted">© 2026 Cava</p>

        </div>
    </div>

</div>
</div>

@vite('resources/js/app.js')

</body>
</html>