<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Processamento usando POST</h1>
        <hr>
<?php if ($_POST["nome"] || $_POST["email"] === !null) {
?>
<?php
// Capturando os dados transmitidos

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$idade =  filter_input(INPUT_POST, "idade", FILTER_SANITIZE_SPECIAL_CHARS);
$mensagem = filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$informativos = $_POST ["informativos"];

// solução 1: aplicar um if/else ternário checando se existe algum interesse 
// $interesses = isset($_POST ["interesses"]) ? $_POST["interesses"] : [];
// se tiver dados coletar se não deixar como um array vazio

// solução 2: usando o operador de coalescência nula ??
// se houver interesses, os armazene. Caso o contrario, guarde array vazio
$interesses = filter_var_array($_POST ["interesses"] ?? [], (FILTER_SANITIZE_FULL_SPECIAL_CHARS);
?>
        <h2>Dados:</h2>
        <ul>
            <li>Nome: <?=$nome?></li>
            <li>Email: <?=$email?></li>
            <li>Idade: <?=$idade?></li>

<!-- Usamos o empty com inversão de lógica (operador ! de negação).
 Portanto, se NÃO ESTÁ vazio, mostre os interesses.-->
<?php if ( !empty($interesses) ) { ?>
            <!-- transformando o array em strings / utilizado para quando não precisa tratar os dados de forma individual -->
            <li>interesses - usando <code>implode()</code>:
                <?=implode(", ", $interesses)?>
            </li>

            <li>Interesses - usando <code>foreach()</code>:
                <ul>
                <?php foreach($interesses as $interesse) { ?>
                    <li> <?=$interesse?> </li>
                <?php } ?>
                </ul>
            </li>
<?php } ?>

        <?php if ( !empty($informativos)) { ?>
            <li>informativos: <?=$informativos?></li>
        <?php }?>
            <li>mensagem: <?=$mensagem?></li>
        


        </ul>
<?php } else {
    echo "Por favor preencha os campos nome e email";
};?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>

</html>