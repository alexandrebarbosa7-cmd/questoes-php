<?php
$Telefonou = 'sim'; //Telefonou para a vítima?
$local = 'sim'; //Esteve no local do crime
$Mora = 'sim'; //Mora perto da vítima
$Devia = 'sim'; //Devia para a vítima
$trabalhou = 'sim'; //Já trabalhou com a vítima
$sim = 1 and 2 and 3 and 4 and 5;

if($Telefonou = $local){
$sim = 2; 
 echo "$sim sim suspeito";
 }elseif ($Telefonou == $local and $Mora){
 $sim = 3;
 echo "$sim sim cumprici";
 }elseif ($Telefonou == $local and $Mora and $Devia and $trabalhou ){
 $sim = 5;
 echo "$sim sim assacino";
 }



?>