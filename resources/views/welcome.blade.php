<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    {{-- CSS do Laravel (Vite) --}}
    @vite('resources/css/app.css')
</head>
<body>

<div class="container">
    <div class="login-card">
        <div class="icon">🔒</div>

        <h2>Bem-Vindo!</h2>
        <p>Faça login de acesso para sua conta</p>

        <form id="loginForm">
            <label>Email</label>
            <input type="email" id="email" placeholder="seu@email.com" required>

            <label>Senha</label>
            <input type="password" id="password" placeholder="********" required>

            <div class="remember">
              <label>
                  <input type="checkbox" id="remember">
                  Lembrar-me por 30 dias
              </label>
            </div>
            <button type="submit">Entrar na conta</button>
        </form>
    </div>

    <footer>© 2026 Cava</footer>
</div>

{{-- JS do Laravel (Vite) --}}
@vite('resources/js/app.js')

</body>
</html>