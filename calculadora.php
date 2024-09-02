<?php 

	$op=3;
	$num1=20;
	$num2=20;
	$rp=0;
	
	function somar($num1, $num2){
		return($num1+$num2);
	}

	function multiplicar($num1, $num2){
		return($num1*$num2);
	}

	function subtrair($num1, $num2){
		return($num1-$num2);
	}

	function divisão($num1, $num2){
		return($num1/$num2);
	}

	if($op == 1){
		echo"Números digitados:  <br />
		Operação escolhida: Adição <br />
		Resultado da Operação:";
		$rp = somar($num1, $num2);
		echo $rp;
	}

	if($op == 2){
		echo"Números digitados: <br />
		Operação escolhida: Subtração <br />
		Resultado da Operação:";
		$rp = subtrair($num1, $num2);
		echo $rp;
	}

	if($op == 3){
		echo"Números digitados: $num1, $num2 <br />
		Operação escolhida: Multiplicação <br />
		Resultado da Operação:";
		$rp = multiplicar($num1, $num2);
		echo $rp;
	}

	if($op == 1){
		echo"Números digitados: <br />
		Operação escolhida: Divisão <br />
		Resultado da Operação:";
		$rp = divisão($num1, $num2);
		echo $rp;
	}




	

	
	

	








?>