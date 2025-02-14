<?php
// Definindo um título padrão
$titulo = "Site com PHP";

// Verifica a página atual com base no nome do arquivo
$pagina = basename($_SERVER['PHP_SELF']);

switch ($pagina) {
    case 'index.php':
        $titulo = $titulo;
        break;

    case 'cursos.php':
        $titulo = "Site com PHP - Cursos";
        break;

        case 'contato.php':
            $titulo = "Site com PHP - Contato";
            break;

        case 'duvidas.php':
            $titulo = "Site com PHP - Duvidas";
            break;
            
    default:
        $titulo = "Página Não Encontrada";
        break;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titulo?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header>
            <nav class="navbar pb-5">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">Site com PHP</a>
                <ul class="nav nav-underline">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="cursos.php">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="duvidas.php">Dúvidas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="contato.php">Contato</a>
                    </li>
                </ul>
                </div>
            </nav>
        </header>

        <main>