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
    $calculo = fn(float $nota1, $nota2, $nota3):float => ($nota1 + $nota2 + $nota3) / 3; 

    $media = $calculo(7,0,0);
  

    function situacao($media){
        if ($media < 7) return "reprovado";
            
        return "aprovado";
    }


    $alunos = [
        "gaa" => $calculo(4,3,0),
        "fasdf" => $calculo(0,10,0),
        "adfdsaf" => $calculo(7,10,8),
        "fsdfd" => $calculo(10,5,4),
        "Afsdfxcv" => $calculo(5,1,7)
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
foreach ($alunos as $aluno => $media) {
    $mediaF = number_format($media, 1);
 
    $bgClass = ($media > 7) ? 'bg-primary-subtle' : 'bg-danger-subtle';
?>
    <tr>    
        <td><?=$aluno?></td>
        <td><?=$mediaF?></td>
        <td class="<?= $bgClass ?>"><?=situacao($media)?></td>
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