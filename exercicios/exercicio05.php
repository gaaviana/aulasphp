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
            $calculo = fn(float $nota1, $nota2, $nota3):float => ($nota1 + $nota2 + $nota3) / 3; 
        ?>
         
        <?php
            $media = $calculo(7,0,0);

            function situacao($media){
                if ($media < 7) return "reprovado";
                 
                return "aprovado";
            }


            $alunos = [
                "A" => $calculo(10,10,10),
                "B" => $calculo(0,10,0),
                "C" => $calculo(7,10,8),
                "D" => $calculo(10,5,4),
                "E" => $calculo(5,1,7)
            ] 
        ?>


        <p><?=$alunos["A"]?></p>
        <p><?=$alunos["B"]?></p>
        <p><?=$alunos["C"]?></p>
        <p><?=$alunos["D"]?></p>
        <p><?=$alunos["E"]?></p>

        <hr>
        <p><?=situacao($media)?></p>
        <p><?=$media?></p>
       
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>

</html>