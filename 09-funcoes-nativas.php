<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <h1>Usando funções nativas</h1>
      <hr>

      <h2>Strings</h2>
      <h3><code>trim()</code></h3>
      <p>Remove espaços antes e depois de strings</p>
      
      <?php
      $txt = "      aaaaaaaaaa";
      $txtSemEspaco = trim($txt);
      ?>

      <pre><?=var_dump($txt)?></pre>
      <pre><?=var_dump($txtSemEspaco)?></pre>
      <hr>

      <h3><code>str_replace()</code></h3>
      <p>Permite substituir partes de uma string</p>
    <?php
    $fraseFeia = "Roça a xereca no ale, calma vida ta dboa";
    $fraseBonita = str_replace(
        ["xereca", "ale"],
        ["******", "***"],
        $fraseFeia
    );
    ?>

        <p><?=$fraseFeia?></p>
        <p><?=$fraseBonita?></p>
        <hr>

        <h3><code>explode()</code></h3>
        <p>Transformar uma string em um array</p>
    <?php
    $txtLinguagens = "HTML,CSS,JS,PHP,SQL";
    $arrayLinguagens = explode(",", $txtLinguagens);
    ?>
    
    <pre><?=var_dump($txtLinguagens)?></pre>
    <pre><?=var_dump($arrayLinguagens)?></pre>
    <hr>

    <h2>Arrays</h2>

    <h3><code>implode()</code></h3>
    <p>Transformar array em string</p>

    <?php
    $arrayBandas = ["mo", "fome", "📌"];
    $txtBandas  = implode(" - ", $arrayBandas);
    ?>

    <pre><?=var_dump($arrayBandas)?></pre>
    <pre><?=var_dump($txtBandas)?></pre>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>

</html>