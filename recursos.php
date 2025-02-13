<?php
define("ESCOLA", "Senac"); //constante
$curso = "Téc. Informática para Internet"; //variavel
$tecnologias = ["HTML", "CSS", "JS"]; //array

//função
function verificarIdade(int $valorDeIdade):string {
    return $valorDeIdade >= 18 ? "maior" : "menor";
};