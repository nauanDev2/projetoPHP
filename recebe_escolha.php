<?php 
	
	$escolha = $_POST['escolha'];

	 switch ($escolha) {
   	case '1':
   		echo "Sua escolha foi Banana R$6,99";
   		break;

   	case '2':
   		echo "Sua escolha foi Maça R$10,00";
   		break;

   	case '3':
   		echo "Sua escolha foi Morango R$8,00";
   		break;

   	case '4':
   		echo "Sua escolha foi Abacaxi R$ 7,00";
   		break;

    case '5':
   		echo"Sua escolha é Lichia R$20,99";
   		break;
   		
   	default:
   		echo"Sua escolha é invalida ";
   		break;
   }


 ?>