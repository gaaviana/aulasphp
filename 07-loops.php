<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - loops</title>
</head>
<body>
    <h1>Trabalhando com comandos/laços de repetições</h1>
    <hr>
    
    <h2>WHILE (ENQUANTO)</h2>
    <p>Executa ações <b>enquanto a condição for verdadeira</b>. se a condição inicialmente não é verdadeira, o loop não funciona nenhuma vez</p>
<?php
$i = 1;
while ($i <= 3) {
?>
    <p><?=$i?></p>
<?php
    $i++;
}
?>

<hr>

    <h2>DO/WHILE (parecido com REPITA)</h2>
    <p>Repete <b>pelo menos uma vez</b> as ações e, caso a condição continue verdadeira, segue fazendo outros ciclos de repetição até a condição se tornar falsa</p>

<?php
$j = 1;
do {
?>
    <div>
        <h3>Titulo...</h3>
        <p>Texto qualquer...</p>
    </div>
<?php
$j++;
} while ($j <= 3);
?>

<hr>
    <h2>FOR (PARA)</h2>
    <p>Executa açõe por uma <b>quantidade determinada</b> de vezes.</p>

<?php
for($i = 1; $i <= 10; $i++){
?>
<p><code>i</code> vale: <b><?=$i?></b></p>
<?php
}
?>

<hr>
<h2>Mini-exercicio</h2>
<p>Crie um array contendo os 12 meses de ano e usando um dos loops que vimos, mostre os nomes dos mses em ua lista ordenada html</p>

<?php
$meses = array(
    1 => "Janeiro",
    2 => "Fevereiro",
    3 => "Março",
    4 => "Abril",
    5 => "Maio",
    6 => "Junho",
    7 => "Julho",
    8 => "Agosto",
    9 => "Setembro",
    10 => "Outubro",
    11 => "Novembro",
    12 => "Dezembro"
);

$a = 1;
while ($a <= 12) {
?>
    <p><?=$meses[$a]?></p>
<?php
    $a++;
}
?>
    
</body>
</html>