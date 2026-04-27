<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Cater - Login</title>
    <link rel="stylesheet" href="style.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="login-container">
        <div class="image-section">
        <img src="{{ asset('images/carne.jpg') }}" alt="Imagem">
        </div>

        <div class="form-section">
            <div class="form-content">
                <div class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo">
                </div>

                <h2>Bem-Vindo!</h2>
                <p class="subtitle">Faça login de acesso para sua conta</p>

                <form id="loginForm">
                    <div class="input-group">
                        <label for="email">Endereço de Email</label>
                        <div class="input-wrapper">
                            <input type="email" id="email" placeholder="seu@gmail.com" required>
                        </div>
                    </div>

                    <div class="input-group">
                        <label for="password">Senha</label>
                        <div class="input-wrapper">
                            <input type="password" id="password" placeholder="........" required>
                        </div>
                    </div>

                    <div class="options">
                        <label class="checkbox-container">
                            <input type="checkbox" id="remember">
                            <span class="checkmark"></span>
                            Lembrar-me por 30 dias
                        </label>
                    </div>

                    <button type="submit" class="btn-login">Entrar na conta</button>
                </form>

                <footer>
                    <p>© 2026 Cava</p>
                </footer>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>