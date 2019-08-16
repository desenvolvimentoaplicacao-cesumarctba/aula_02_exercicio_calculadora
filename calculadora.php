<?php

include "metodos.php";
include "atributos.php";
//echo щ 
echo "***** calculadora********" .PHP_EOL;
echo "***** 1 - somar**********" .PHP_EOL;
echo "***** 2 - dividir********" .PHP_EOL;
echo "***** 3 - multiplicar****" .PHP_EOL;
echo "***** 4 - subitrair******" .PHP_EOL;

$operador = readline("escolha uma opcao: " .PHP_EOL);
$valor1 = readline("digite o primeiro valor: " .PHP_EOL);
$valor2 = readline("digite o segundo valor: " .PHP_EOL);
// switch = escolha
switch ($operador) {
// caso
case 1:
	echo somar($valor1,$valor2);
// break = separar a intruчуo;
	break;
case 2:
	echo dividir($valor1,$valor2);
	break;
case 3:
	echo multiplicar($valor1,$valor2);
	break;
case 4:
	echo subtrair($valor1,$valor2);
	break;
default:
	echo "opcao invalida";
	break;
	
}




