<?php

	//criando uma função
	function soma(){
		$num1=10;
		$num2=20;

		$resp=$num1+$num2;
		echo $resp . "<br />";
	}


	//criando uma função com dois parâmetros
	function somar ($num1,$num2){
		$resp = $num1 + $num2;
		echo $resp . "<br />";
	}


	//executando uma função
	soma();

	//executando uma função com parâmetros
	somar(20,30);

	function somarValores($num1, $num2){
		return($num1+$num2);
	}

	echo "<br /> Somando valores: " . somarValores(50,60);
	
?>