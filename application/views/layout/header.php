<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reis System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary text-right p-2">
            <a href="#" class="navbar-brand pe-none ">ReisSystem</a>
            <!-- Menu Hamburguer -->
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navegacao">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navegacao -->
            <div class="collapse navbar-collapse" id="navegacao">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= site_url('login/home') ?>">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link dropdown-toggle text-light" data-toggle="dropdown">Cadastrar</a>

                        <div class="dropdown-menu">
                            <a href="<?= site_url('usuario/cadastro_usuario') ?>" class="dropdown-item">Usuário</a>
                            <a href="<?= site_url('cliente/cadastro_cliente') ?>" class="dropdown-item">Cliente</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle text-light" data-toggle="dropdown">Relatório</a>
                        <div class="dropdown-menu">
                            <a href="<?= site_url('usuario/relatorio_usuario') ?>" class="dropdown-item">Usuário</a>
                            <a href="<?= site_url('cliente/relatorio_cliente') ?>" class="dropdown-item">Cliente</a>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="logoff.php">SAIR</a>
                </li>
            </ul>
        </nav>
    </header>
