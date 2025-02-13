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

        <hr>

        <h3><code>extract()</code></h3>
        <p>Extrai chaves associativas para variáveis</p>
    <?php
    $aluno = [
        "id" => 1,
        "nome" => "Gabriel",
        "idade" => 18
    ];

    $nome = "Viana";
    echo $nome;

    extract($aluno);
    ?>

        <ul>
            <li>ID: <?=$id?></li>
            <li>Nome: <?=$nome?></li>
            <li>Idade: <?=$idade?></li>
        </ul>

        <hr>

        <h3><code>array_sum()</code></h3>
        <p>Somar valores de um array numerico</p>
    <?php
    $valores = [10, 20, 50, 1000, 500];
    $total = array_sum($valores);
    ?>
        <p>Soma dos valores do array: <?=$total?></p>

        <hr>

        <h3><code>array_unique()</code></h3>
        <p>Retorna um novo array com dados <b>únicos</b></p>

    <?php
    $produtos = [
        "TV", "Notebook", "TV", "Geladeira", "Monitor", "Mouse", "Monitor", "Webcam"
    ];

    $produtosUnicos = array_unique($produtos);
    ?>

        <pre><?=var_dump($produtos)?></pre>
        <pre><?=var_dump($produtosUnicos)?></pre>
        <hr>

        <h2>Numéricas</h2>
        <h3><code>min(), max(), round()</code></h3>
<?php
$valorQualquer = 1259.75;
?>

    <p><?=min($valores)?></p>
    <p><?=max($valores)?></p>
    <p><?=round($valorQualquer)?></p>
    <hr>

    <h2>Filtros</h2>
    <p>Recursos/funções/constantes de análise e limpeza de dados aplicados através das funções <code>filter_var()</code> e <code>filter_input()</code></p>

    <h3>Validação</h3>
<?php
// exemplo de email estruturado erronemanete
$emailErrado = "gaab.com.br";
$emailCorreto = "gaab@gmail.com.br";
?>

    <p><?=var_dump(filter_var($emailErrado, FILTER_VALIDATE_EMAIL))?></p>
    <p><?=var_dump(filter_var($emailCorreto, FILTER_VALIDATE_EMAIL))?></p>

    <hr>

    <h3>sinalização</h3>
<?php
$ataqueDeRaqui = "
<script>
    document.body.innerHTML = '<h1 style=background:yellow><marquee loop>Sou ráqui!!</marquee></h1>'
</script>
";

// echo $ataqueDeRaqui;
$ataqueSanitizado = filter_var($ataqueDeRaqui, FILTER_SANITIZE_SPECIAL_CHARS);
echo $ataqueSanitizado;
?>




    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>

</html>