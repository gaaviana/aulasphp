<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Manipulando dados na memoria</title>
</head>
<body>

<h1>Usando variáveis e constantes</h1>

<hr>

<?php
// VARIÁVEIS
$curso = "Tec. em Informática para Internet"; //string
$ano = 2025; //inteiro
$preço = 2500.25; //real

echo "<h2>Saida de dados usando echo na sintaxe COMPLETA</h2>";

// Usando concatenação
echo "<p>Estamos no curso <b>".$curso."</b> no ano letivo de ".$ano. ".</p>";

// interpolação (OBRIGATORIO ASPAS DUPLAS)
echo "<p>Estamos no curso $curso no ano letivo de $ano.</p>";

?>

<hr>

<h2>Saida de dados usando echo na sintaxe ABREVIADA</h2>
<p>Estamos no curso <b class=""><?=$curso?></b>  no ano letivo de <?=$ano?>.</p>

<?php
// Constantes
// sintaxe 1 (mais antiga): usando função define()

define("MEU_NOME", "Gabriel Viana Paulino");

// sintaxe 2 (mais moderna); usando a palavra-chave const

const UNIDADE = "penha";

?>

<h2>Saida de dados constantes</h2>
<p> Me chamo <?=MEU_NOME?> e estou na unidade <?=UNIDADE?></p>

<h2>Sintaxe heredoc e nowdoc</h2>
<p><i>Úteis prar strings de múltiplas linhas</i></p>

<?php
$nome = "Gaa";

$textoHeredoc = <<<TEXTO
<ul>
    <li> Nome: $nome</li>
    <li style="color: red"> Texto com css</li>
</ul>
TEXTO;

$comida = "lasanha";

//exclusivo para texto
$textoNowdoc = <<<'TEXTO'
    Olá! Bem-vindo(a) ao PHP.
    Estamos testando a sintaxe <b>nowdoc</b>.
    eu adoro $comida.
TEXTO;
?>

<div>
    <h3>Saida com Heredoc</h3>
    <?=$textoHeredoc;?>
</div>

<div><?=$textoNowdoc;?></div>

</body>
</html>