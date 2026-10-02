<?php 
$parcial = 2.2;
$bimestral = 2.7;
$final = ($parcial+$bimestral) / 2;

if ($final >= 9 and $final<= 10){
    echo "nota A, aprovado";
}elseif ($final >=7.5 and $final <= 8.9){
    echo "nota B, aprovado";
}elseif ($final >=6 and $final <=7.4 ){
   echo "nota C, aprovado";
   }elseif ($final >=4 and $final <=5.9 ){
   echo "nota D, reprovado";
   }elseif ($final >=0 and $final <=3.9 ){
   echo "nota E, reprovado desista";
   }

?>