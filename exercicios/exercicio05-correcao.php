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
   
<?php
$aluno = "gaa";
$nota1 = 7;
$nota2 = 10;
$nota3 = 9;
 
function calcularMedia(float $valorNota1, float $valorNota2, float $valorNota3){
    $resultadoDaMedia = ($valorNota1 + $valorNota2 + $valorNota3) / 3;
    return $resultadoDaMedia;
}
 
function verificarSituacao(float $valorMedia){
    if ($valorMedia >= 7) {
        return  "aprovado";
    } else {
        return "reprovado";
    }
}
 
$media = calcularMedia($nota1, $nota2, $nota3);
$situacao = verificarSituacao($media);
 
?>
 
    <h1> <?=$aluno?> </h1>
    <hr>
    <p> <?=$media?> </p>
    <p> <?=$situacao?> </p>
 
</div>
 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
 
</html>