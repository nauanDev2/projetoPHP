<?php 

$s = 1850;
$desc = 0;

 if ($s <= 1500) {
 	echo "Salário bruto: $s <br/>";
 	echo "Porcentagem do desconto: 10% <br/>";
 	$desc = $s - (($s * 10)/100);
 	echo "Salário com desconto: $desc <br/> ";
 }

 if ($s >= 1501 && $s <= 1600) {
 	echo "Salário bruto: $s <br/>";
 	echo "Porcentagem do desconto: 15% <br/>";
 	$desc = $s - (($s * 15)/100);
 	echo "Salário com desconto: $desc <br/> ";
 }

if ($s >= 1601 && $s <= 1800) {
 	echo "Salário bruto: $s <br/>";
 	echo "Porcentagem do desconto: 20% <br/>";
 	$desc = $s - (($s * 20)/100);
 	echo "Salário com desconto: $desc <br/> ";
 }


if ($s >= 1801 && $s <= 2500) {
 	echo "Salário bruto: $s <br/>";
 	echo "Porcentagem do desconto: 27,5%<br/>";
 	$desc = $s - (($s * 27.5)/100);
 	echo "Salário com desconto: $desc <br/> ";
 }














 ?>