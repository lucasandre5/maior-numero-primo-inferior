<?php

function retornaDivisores($num){
	$divisores = 0;

	for ($i=1; $i <= $num; $i++) { 
		if($num % $i === 0){
			$divisores++;
		}
	}

	return $divisores;
}

function primoInferior($num){
	$result = 0;
	for ($i=$num-1; $i >= 1; $i--) { 
		$divisores = retornaDivisores($i);
		if ($divisores === 2) {
			$result = $i;
			break;
		}
	}

	return $result;
}

$num = 30;

$result = primoInferior($num);

echo "O maior número primo inferior é: ". $result;

/**
- Separei em duas funções para melhorar um pouco a legibilidade do código
- Como no desafio pede o número primo INFERIOR ao passado por parâmetro,
caso o valor passado seja um número primo, a função retornára o número primo
abaixo dele.
*/