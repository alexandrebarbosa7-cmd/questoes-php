<?php

$salario = 2600;
$horastr = 6; // horas que foram trabalhadas
$hora = 5 / 100 * $salario; // valor da hora  
$imposto = 5 / 100 * $salario and 10 / 100 * $salario and 20 / 100 * $salario;

if ($salario <= 900) {
    echo $salario + $horastr * $hora;
} elseif ($salario >= 901 and $salario <= 1499) {
    $imposto = 5 / 100 * $salario;
    echo $salario + $horastr * $hora - $imposto;
} elseif ($salario >= 1500 and $salario <= 2500){
    $imposto = 10 / 100 * $salario;
echo $salario + $horastr * $hora - $imposto;
} elseif ($salario >=2501){
$imposto = 20/100*$salario; 
echo "você recebe um salario de ,$salario, mas você tem que pagar $imposto de imposto assim ficando com " . $salario + ($horastr*$hora) - $imposto;
}

?>