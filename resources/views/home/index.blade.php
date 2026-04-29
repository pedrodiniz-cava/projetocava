<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- AdminLTE -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <!-- FontAwesome (ícones do AdminLTE) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    @vite('resources/css/logout.css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark";>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <span class="nav-link text-white">HomeView</span>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <form method="POST" action="/logout" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-light ml-2">
                        <i class="fas fa-sign-out-alt"></i> Sair
                    </button>
                </form>
            </li>
        </ul>
    </nav>

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background:#1a0a33;">
        <a href="/home" class="brand-link" style="background:#4b1d87;">
            <span class="brand-text font-weight-light">Prime Cater</span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link active" style="background:#4b1d87;">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Início</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Conteúdo -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <h1 class="m-0">Dashboard</h1>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <!-- Adicione o conteúdo da página aqui -->
            </div>
        </div>
    </div>

    <footer class="main-footer">
        <strong>© Prime</strong>
    </footer>

</div>

<!-- Bootstrap + AdminLTE JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>


