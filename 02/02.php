<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Faixa Etária</title>
</head>
<body>
<div>
    <h2>Resultado - Faixa Etária</h2>
    <?php
    $nome = $_GET["nome"];
    $ano_nascimento = $_GET["ano_nascimento"];
    $idade = 2024 - $ano_nascimento; /*aqui era pra ter usado o função Date("Y") */
    
    if ($idade >= 0 && $idade <= 11) { /*apesar de ter rodado certo, mas esse código está codificado de modo errado. Verifique o modo correto no GitHub quando o professor disponibilizar. */
        $faixa_etaria = "Criança";} 
    elseif ($idade >= 12 && $idade <= 14) {
        $faixa_etaria = "Adolescente";} 
    elseif ($idade >= 15 && $idade <= 18) {
        $faixa_etaria = "Jovem";} 
    elseif ($idade >= 19 && $idade <= 64) {
        $faixa_etaria = "Adulto";} 
    else {
        $faixa_etaria = "Idoso";}
    
    echo "Olá, $nome! Sua idade é $idade e você é $faixa_etaria.";
    ?>

    <h5>Tabela de verificação:<br/> <!--Gostei dessa informação no final-->
    Criança (0 a 11 anos)<br/>
    Adolescente (12 a 14 anos)<br/>
    Jovem (15 a 18 anos)<br/>
    Adulto (19 a 64 anos)<br/>
    Idoso (+ 65 anos)</h5>

    <br/>

    <a href="02.html">Voltar</a> <!-- Cadê a tag <button>?-->
</div>    
</body>
</html>