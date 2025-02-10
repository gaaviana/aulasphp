<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP e HTML: Arrays</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">

    <h1 class="text-center"">Exercicio 02 - Arrays</h1>

    <hr>

    <?php
    $pessoa01 = [
        "nomeDeUsuario" => "Gabsxz",
        "email" => "gabsxz@gmail.com",
        "senha" => "123",
        "idade" => 19,
        "sexo" => "Masculino",
        "cidade" => "São Paulo - SP",
    ];

    $pessoa02 = [
        "nomeDeUsuario" => "Vianaa",
        "email" => "vianaa@gmail.com",
        "senha" => "987",
        "idade" => 91,
        "sexo" => "Masculino",
        "cidade" => "Rio de Janeiro - RJ",
    ];
    ?>

    <!-- <article>
        
        <div class="row gap-3">
            <div class="col bg-success-subtle">
                <p>Nome de usuario: <?= $pessoa02["nomeDeUsuario"] ?> </p>
                <p>Email: <?= $pessoa02["email"] ?></p>
                <p>Idade: <?= $pessoa02["idade"] ?></p>
                <p>Sexo: <?= $pessoa02["sexo"] ?></p>
            </div>
            
            <div class="col bg-success-subtle">
                <p>Nome de usuario: <?= $pessoa01["nomeDeUsuario"] ?> </p>
                <p>Email: <?= $pessoa01["email"] ?></p>
                <p>Idade: <?= $pessoa01["idade"] ?></p>
                <p>Sexo: <?= $pessoa01["sexo"] ?></p>
            </div>
        </div>
    </article> -->
    
    <h2 class=" text-center">Dados de Usuarios</h2>
    <hr>
    <div class="row gap-3">
        <div class="card col" style="width: 18rem;">
            <img src="../img/user.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Nome de usuario:</h5>
                <p class="card-text"><?= $pessoa02["nomeDeUsuario"] ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Email: <?= $pessoa02["email"] ?></li>
                <li class="list-group-item">Idade: <?= $pessoa02["idade"] ?></li>
                <li class="list-group-item">Sexo: <?= $pessoa02["sexo"] ?></li>
            </ul>
        </div>

        <div class="card col" style="width: 18rem;">
            <img src="../img/user.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Nome de usuario:</h5>
                <p class="card-text"><?= $pessoa01["nomeDeUsuario"] ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Email: <?= $pessoa01["email"] ?></li>
                <li class="list-group-item">Idade: <?= $pessoa01["idade"] ?></li>
                <li class="list-group-item">Sexo: <?= $pessoa01["sexo"] ?></li>
            </ul>
        </div>
    </div>

        <hr>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>