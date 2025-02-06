<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores logicos - PHP</title>
</head>
<body>
    <h1>Relembrando Operadores logicos</h1>
    <hr>

    <h2>&& (E/AND)</h2>
    <p><i>Todas as condições precisam ser <b>VERDADEIRAS/TRUE</b></i></p>

<?php
// avaliar um aluno mediante média e faltas

$media = 9;
$faltas = 10;

if ($media >= 7 && $faltas <= 10) {
    echo "<p>Aprovado !</p>";
} else {
    echo "<p>Reprovado !</p>";
}
?>

        <!-- O simbolo | é chamado de pipe -->
    <h2>|| (OU/OR)</h2>
<?php
// Dar desconto a um cliente que seja Vip ou que tenha cupom

$clienteVip = true; //valor/tipo logico/booleean
$temCupom = false;

if ($clienteVip || $temCupom) {
    echo "<p>Desconto aplicado!</p>";
} else {
    echo "<p>Sem desconto!</p>";
}

?>

    <h2>! (NÃO/NOT)</h2>
    <p><i>É uma inversão de logica: VERDADEIRO vira <b>FALSO<b>, FALSO vira </b>VERDADEIRO</b></i></p>

<?php
// Se o usuario NÃO ESTIVER logadp, exibir o link/botão de LOGIN. Caso contrario, exibir uma saudação
$usuarioLogado = true;

if (!$usuarioLogado) {
    echo "<a href='login.php'>Login</a>";
} else {
    echo "<span>Bem-vindo ao sistema!</span>";
}

?>

    <hr>
    <h2>Usando os 3 Operadores combinados para uma logica mais elaborada</h2>

<?php
// Para entrar numa festa é necessario atender os seguintes criterios:
// Idade mnima de 18 anos, ou estar acompanhado dos pais e não estar bebado

//  Variaveis
$idade = 16;
$acompanhado = true;
$sobrio = true;

    if (($idade >= 18 || $acompanhado) && !$sobrio) {
        echo "<p>Entrada permitida!</p>";
    } else {
        echo "<p>Entrada negada!</p>";
    }
    
?>

</body>
</html>