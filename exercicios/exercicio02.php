<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP e HTML: Arrays</title>
    <style>
        html {
            font-size: 18px;
            font-family: 'Times New Roman', Times, serif
        }

        article {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;

            h2 {
                width: 100%;
                text-align: center;
                text-transform: uppercase;
            }
        }

        div {
            width: 40%;
            padding: 10px;
            border: solid 1px #000000;
            border-radius: 10px;
        }

        div:hover {
            transform: scale(1.05);
            background-color: #D3D3D3;
        }
    </style>
</head>

<body>

    <h1 style="text-align: center;">Exercicio 02 - Arrays</h1>

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

    <article>
        <h2>Dados de Usuarios</h2>

        <div>
            <p>Nome de usuario: <?= $pessoa02["nomeDeUsuario"] ?> </p>
            <p>Email: <?= $pessoa02["email"] ?></p> 
            <p>Idade: <?= $pessoa02["idade"] ?></p> 
            <p>Sexo: <?= $pessoa02["sexo"] ?></p> 
        </div>

        <div>
            <p>Nome de usuario: <?= $pessoa01["nomeDeUsuario"] ?> </p>
            <p>Email: <?= $pessoa01["email"] ?></p> 
            <p>Idade: <?= $pessoa01["idade"] ?></p> 
            <p>Sexo: <?= $pessoa01["sexo"] ?></p> 
        </div>
    </article>

    <hr>

</body>

</html>