<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixação de conteudo</title>
</head>
<body>
    <?php
    
    $idade = 18;
    $peso = 51;

    $idadeParaDoarSangue = $idade >= 16 && $idade < 69 ? true : false;
    $pesoParaDoarSangue = $peso > 50 ? true : false;

    $podeDoarSangue = $pesoParaDoarSangue == true && $idadeParaDoarSangue == true ? "Atende aos requisitos" : "Não Atende aos Requisitos";
    ?>

    <h1>Informações do Doador</h1>
    <p>Idade: <?=$idade?></p>
    <p>Peso: <?=$peso?></p>
    <p><?=$podeDoarSangue?></p>

</body>
</html>