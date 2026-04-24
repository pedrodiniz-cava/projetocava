<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
  @vite('resources/css/logout.css')
</head>
<body>

    <div class="topo">
        <span>HomeView</span>

        <form method="POST" action="/logout">
            @csrf
            <button type="submit">Deslogar</button>
        </form>
    </div>

    <main class="conteudo"></main>

    <div class="canto esquerdo"></div>
    <div class="canto direito"></div>

</body>
</html>


