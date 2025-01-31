<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Sintaxe geral</title>
    <style>
        .exemplo {
            color: red;
            border: solid 4px;
            padding: 4px;
        }
    </style>
</head>
<body>

    <h1>Trabalhando com PHP</h1>
    
    <?php
        // Geração de strings/textos
        echo "menino ney voltou";

        // Geração de tags e atributos
        echo "<p>aaaaaaaaaaaaaaaa</p>";
        echo "<p><abbr title = 'SANTOS FUTEBOL CLUBE'>SFC<abbr></p>";

        echo "<h2>Programando <span class = \"exemplo\">PHP<span></h2>";

        $saudacao = "ola!";
    ?>

<script>
    const exemplo = document.querySelector(".exemplo");

    exemplo.addEventListener("click",function(){
        alert( "<?php echo $saudacao; ?>" )
    });
</script>

</body>
</html>