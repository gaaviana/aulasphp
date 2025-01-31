<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays</title>
</head>
<body>
    <h1>Trabalhando com arrays</h1>
    <hr>

    <h2>Arrays numéricos/indexados</h2>

<?php
// Sintaxe com colchetes
$bandas = ["savatage", "Rush", "Slayer"];

// Sintaxe com a função array()
$cursos = array("HTML5", "Node.js", "PHP", "SQL");

// Sintaxe de atribuição manual usando os índeices
$comida [0] = "Bolinho de bacalhau";
$comida [1] = "Pastel";
$comida [2] = "Coxinha";

// Constantes array
define("UNIDADE", ["Penha", "Tatuapé"]);
const FRUTAS = ["Morango", "Abacaxi"];
?>

    <h3>Acessando os dados</h3>
    <ul>
        <li>Bandas que mais curto: <?=$bandas[1]?></li>
        <li>Em breve vou lançar um curso de <?=$cursos[2]?></li>
        <li>Quero comer <?=$comida[0]?></li>
        <li>Estamos no Senac <?=UNIDADE[0]?></li>
        <li>Vou fazer una caipirinha de <?=FRUTAS[1]?></li>
    </ul>

    <h2>Array associativos</h2>

<?php
$curso = [
    // chave associativa; identificar => valor
    "titulo" => "Gastronomia",
    "carga_horaria" => 200,
    "descricao" => "Aprender a esquentar água e fazer ovo cozido..."
];
?>

<h3>Acessando os dados</h3>
<p>Nome do curso: <?=$curso["titulo"]?></p>
<p>Carga horaria: <?=$curso["carga_horaria"]?> horas.</p>
<p>Descrição: <?=$curso["descricao"]?></p>

<?php
define(
    "EMPRESA",
    [
        "nome" => "Tec. Informatica para Internet",
        "ano_fundacao" => 2021
    ]
);

echo EMPRESA["nome"];

echo "<br><br>";

const OUTRA_EMPRESA = ["nome" => "Ti", "ano_fundacao" => 2022];
echo OUTRA_EMPRESA["nome"];
?>

<h2>Matriz (array dentro de array)</h2>

<?php
$planoDeEstudos = [
    ["JS Avançado", "Node.js", "Next.js"],
    ["PHP", "Orientação a objetos"],
    ["Teoria das cores", "Photoshop", "UX/UI", "Motion Design"]
];
?>

<h3>Acessando os dados</h3>
<p>Vou estudar nos próximos meses:
    <?=$planoDeEstudos[0][2]?>, <?=$planoDeEstudos[1][0]?> e <?=$planoDeEstudos[2][3]?>.
</p>

<hr>

<h2>Funções de análise/depuração/debug de estruturas de dados</h2>

<h3><code>print_r()</code></h3>
<pre><?=print_r($bandas)?></pre>

<h3><code>var_dump()</code></h3>
<pre><?=var_dump($bandas)?></pre>
<pre><?=var_dump($curso)?></pre>


</body>
</html>