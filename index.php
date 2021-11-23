<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="style/css/bootstrap.css" rel="stylesheet">

    <link href="style/style.css" rel="stylesheet">

    <title>SAB - Sistema de Administração de Bibliotecas</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000000;">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="?page=main"><b>SAB</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto text-center">

                    <li class="nav-item">
                        <a class="nav-link active inicio" id="inicio" aria-current="page" href="?page=main"><b>Início</b></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Bibliotecas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="?page=biblioteca-listar">Listar</a></li>
                            <li><a class="dropdown-item" href="?page=biblioteca-cadastrar">Cadastrar</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Atendentes
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="?page=atendente-listar">Listar</a></li>
                            <li><a class="dropdown-item" href="?page=atendente-cadastrar">Cadastrar</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorias
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="?page=categoria-listar">Listar</a></li>
                            <li><a class="dropdown-item" href="?page=categoria-cadastrar">Cadastrar</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Alunos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="?page=aluno-listar">Listar</a></li>
                            <li><a class="dropdown-item" href="?page=aluno-cadastrar">Cadastrar</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Livros
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="?page=livro-listar">Listar</a></li>
                            <li><a class="dropdown-item" href="?page=livro-cadastrar">Cadastrar</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Reservas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="?page=reserva-listar">Listar</a></li>
                            <li><a class="dropdown-item" href="?page=reserva-cadastrar">Cadastrar</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php
                //Faz a conexão com o banco de dados
                include("config.php");

                //Switch para chamar as páginas
                switch (@$_REQUEST["page"]) {
                        //Biblioteca
                    case 'biblioteca-listar':
                        include("pages/biblioteca-listar.php");
                        break;

                    case 'biblioteca-cadastrar':
                        include("pages/biblioteca-cadastrar.php");
                        break;

                    case 'biblioteca-editar':
                        include("pages/biblioteca-editar.php");
                        break;

                    case 'biblioteca-salvar':
                        include("pages/biblioteca-salvar.php");
                        break;

                        //Atendentes
                    case 'atendente-listar':
                        include("pages/atendente-listar.php");
                        break;

                    case 'atendente-cadastrar':
                        include("pages/atendente-cadastrar.php");
                        break;

                    case 'atendente-editar':
                        include("pages/atendente-editar.php");
                        break;

                    case 'atendente-salvar':
                        include("pages/atendente-salvar.php");
                        break;

                        //Categorias
                    case 'categoria-listar':
                        include("pages/categoria-listar.php");
                        break;

                    case 'categoria-cadastrar':
                        include("pages/categoria-cadastrar.php");
                        break;

                    case 'categoria-editar':
                        include("pages/categoria-editar.php");
                        break;

                    case 'categoria-salvar':
                        include("pages/categoria-salvar.php");
                        break;

                        //Alunos
                    case 'aluno-listar':
                        include("pages/aluno-listar.php");
                        break;

                    case 'aluno-cadastrar':
                        include("pages/aluno-cadastrar.php");
                        break;

                    case 'aluno-editar':
                        include("pages/aluno-editar.php");
                        break;

                    case 'aluno-salvar':
                        include("pages/aluno-salvar.php");
                        break;

                        //Livros
                    case 'livro-listar':
                        include("pages/livro-listar.php");
                        break;

                    case 'livro-cadastrar':
                        include("pages/livro-cadastrar.php");
                        break;

                    case 'livro-editar':
                        include("pages/livro-editar.php");
                        break;

                    case 'livro-salvar':
                        include("pages/livro-salvar.php");
                        break;

                        //Reservas
                    case 'reserva-listar':
                        include("pages/reserva-listar.php");
                        break;

                    case 'reserva-cadastrar':
                        include("pages/reserva-cadastrar.php");
                        break;

                    case 'reserva-editar':
                        include("pages/reserva-editar.php");
                        break;

                    case 'reserva-salvar':
                        include("pages/reserva-salvar.php");
                        break;

                        //Página inicial
                    default:
                        include("pages/main.php");
                        break;
                }

                ?>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>