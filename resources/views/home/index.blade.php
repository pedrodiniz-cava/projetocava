<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrimeCater</title>

    <link rel="stylesheet" href="{{ asset('css/logout.css') }}">
</head>
<body>

    <header class="topbar">

        <div class="logo-area">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo-img">
            <h1 class="logo-text">PRIMECATER</h1>
        </div>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-btn">
                Deslogar
            </button>
        </form>

    </header>

    <main class="content-area">

    </main>

</body>
</html>