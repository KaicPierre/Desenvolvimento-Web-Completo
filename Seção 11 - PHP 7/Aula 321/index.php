<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo calcularImposteDeRenda(5000)
    ?>

</body>
</html>

<?php 

    function calcularImposteDeRenda($salario){

        if ($salario <= 1903.98)
            return "Não paga imposto de renda";
        else if($salario > 1903.98 && $salario <= 2826.65)
            return "Imposto de renda = R$". $salario * 0.075;
        else if($salario > 2826.65 && $salario <= 3751.05)
            return "Imposto de renda = R$". $salario * 0.15;
        else if($salario >  3751.05 && $salario <= 4664.68)
            return "Imposto de renda = R$". $salario * 0.225;
        else if($salario >  4664.68)
            return "Imposto de renda = R$". $salario * 0.275;
    }

?>