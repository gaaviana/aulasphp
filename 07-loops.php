<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - loops</title>
<!-- 
    <style>
        ol {
            justify-content: center;
            display: flex;
            gap: 50px;
            flex-wrap: wrap;
            background-color: beige;
            border: solid 1px;
        }
        li {
            width: 200px;
            height: 200px;
            display: flex;
            justify-content: center;
            border: solid 1px;
            padding-top: 10px ;
          
            position: relative;
        }

        .calendario {
            max-width: 150px ;
            font-size: 20px;
 
            padding-top: 10px ;
            position: absolute;
        }

    </style> -->
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
<p>Crie um array contendo os 12 meses de ano e usando um dos loops que vimos, mostre os nomes dos meses em uma lista ordenada html</p>

<ol>
    <?php
    $meses = array( "Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
    ?>
    <?php
    $a = 0;
    while ($a < 12) {
    ?>
<li> <?=$meses[$a]?> <!-- <p class="calendario">01 02 03 04 05 06 07 08 09 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27 28 29 30 31</p></li> -->
    <?php
        $a++;
    }
    ?>
</ol>

    <h2>FOREACH (PARA CADA)</h2>
    <p>Versão simplificada do loop for e bem mais fácil de usar com arrays e objetos.</p>

    <h3>Acessando array indexado/numerico</h3>
<?php
$alunos = ["Denis", "Paulo", "Heloisa"];

foreach ($alunos as $aluno) {
?>
    <p>Nome: <?=$aluno?></p>
    
<?php
}
?>

    <h3>Acessando array associativo</h3>
<?php
$clubes = [
    "Corinthians" => "Cortinas",
    "Palmeiras" => "Torneiras",
    "São Paulo" => "trikas",
    "Santos" => "Peixão malvadão 🐋"
];

foreach($clubes as $clube => $apelido) {
?>
    <p>O clube <?=$clube?> é conhecido como <?=$apelido?></p>
<?php
}
?>
</body>
</html>