<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situação do Aluno</title>
</head>
<body>
<div>
    <h2>Situação final.</h2>
    <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $nota3 = $_GET["n3"];
        $nota4 = $_GET["n4"];
        $resultado = number_format(($nota1 + $nota2 + $nota3 + $nota4) / 4, 2);
        
        if ($resultado >= 7 && $resultado <= 10) {
            echo  "Média das notas é igual a: $resultado. </br> Situação: aprovado.";
        } elseif ($resultado >= 5 && $resultado <= 6.99) {
            echo "Média das notas é igual a: $resultado. </br> Situação: de recuperação.";
        } else {
            echo "Média das notas é igual a: $resultado. </br> O aluno está reprovado.";
        }
    
    ?>
    <br/>

    <a href="03.html">Voltar</a>
</div>    
</body>
</html>