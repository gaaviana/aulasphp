<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio01</title>
    <style>
        html {
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        table {
            text-align: center;
            border-collapse:collapse ;
           margin: auto;
            
        }

        caption {
            margin: 10px;
        }

        th, td {
            padding: 5px;
            border: solid 1px;
        }

        td:nth-child(odd), th:nth-child(odd) {
            background-color: #f9f9f9;
        }
        
        td:nth-child(even), th:nth-child(even) {
            background-color: #e0e0e0;
        }

        .faltas {
            color: #FF0000; 
        }

    </style>
</head>
<body>

<?php

// Definir fuso horario
date_default_timezone_set("america/sao_paulo");
//hora
$hora = date("h:i");

// data
$data = date("d/M/y");
$nome = "Gabriel Viana Paulino";
$curso = "Tec. em Informatica para Internet";
$cargaHoraria = 1000;
$limiteFaltas = ($cargaHoraria * 0.25) / 4 ;
?>


<table>
    <caption>
        Exercicio 01
    </caption>
    <thead>
        <tr>
            <th>Data</th> 
            <th>Aluno</th> 
            <th>Curso</th> 
            <th>Carga Horaria</th> 
            <th class="faltas">Limite de faltas</th> 
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?=$data?></td>
            <td><?=$nome?></td>
            <td><?=$curso?></td>
            <td><?=$cargaHoraria?></td>
            <td class="faltas"> <?=$limiteFaltas?> Dias</td>
        </tr>
    </tbody>
</table>


<p style="text-align: center;"><?=$data?>, <?=$nome?> está cursando <?=$curso?>, com carga horária de <?=$cargaHoraria?> e limite de <span class="faltas"><?=$limiteFaltas?> faltas. </span></p>

<p><?=$hora?></p>

</body>
</html>