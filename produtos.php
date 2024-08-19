<?php

   $p = 3;

   echo "Menu dos Produtos: <br />";
   echo "1- Banana <br />";
   echo "2- Laranja <br />";
   echo "3- Abacaxi <br />";
   echo "4- Sair <br /><br />";

   switch ($p) {
   	case '1':
   		echo "Sua escolha foi Banana";
   		break;

   	case '2':
   		echo "Sua escolha foi Laranja";
   		break;

   	case '3':
   		echo "Sua escolha foi Abacaxi";
   		break;

   	case '4':
   		echo "Sua escolha foi Sair";
   		break;
   		
   	default:
   		echo"Sua escolha é inválida";
   		break;
   }


?>