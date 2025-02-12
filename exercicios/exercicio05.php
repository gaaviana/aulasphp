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

        <h1 class="text-center">EXERCICIO - 05</h1>
        <hr>

<?php
    $calcularMedia = fn(float $nota1, $nota2, $nota3):float => ($nota1 + $nota2 + $nota3) / 3; 

    $media = $calcularMedia(7,0,0);
  

    function verificarSituacao($media){
        if ($media >= 7) return "Aprovado";
            
        return "Reprovado";
    }


    $alunos = [
        "gaa" => $calcularMedia(10,9,8),
        "fasdf" => $calcularMedia(7,10,5),
        "adfdsaf" => $calcularMedia(7,6,8),
        "fsdfd" => $calcularMedia(3,5,4),
        "Afsdfxcv" => $calcularMedia(5,1,7)
    ];

?>
        <table class="table table-bordered border-dark text-center table-hover">
            <thead>
               <tr>
                    <th class="table-dark">Nome</th>
                    <th class="table-dark">Media</th>
                    <th class="table-dark">Situação</th>
               </tr> 
            </thead>
            <tbody>
            <?php
foreach ($alunos as $aluno => $mediaAlunos) {
    $mediaFormatada = number_format($mediaAlunos, 1);
 
    $mediaCor = ($mediaAlunos >= 7) ? 'badge bg-success text-light mt-1' : 'badge bg-danger text-light mt-1';
?>
    <tr>    
        <td><?=$aluno?></td>
        <td><?=$mediaFormatada?></td>
        <td class="<?=$mediaCor?>"><?=verificarSituacao($mediaAlunos)?></td>
    </tr>
<?php
}
?>    
            </tbody>
        </table>   
        <hr>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>

</html>