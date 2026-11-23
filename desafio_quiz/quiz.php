
<?php

// 1) Função para somar dois números
function somar($num1, $num2) {
    return $num1 + $num2;
}

echo "1) Soma: " . somar(10, 5) . "<br>";


// 2) Função para calcular a média de três números
function media($num1, $num2, $num3) {
    return ($num1 + $num2 + $num3) / 3;
}

echo "2) Média: " . media(7, 8, 9) . "<br>";


// 3) Função para verificar se um número é par ou ímpar
function verificarNumero($numero) {
    if ($numero % 2 == 0) {
        return "Par";
    } else {
        return "Ímpar";
    }
}

echo "3) Número: " . verificarNumero(7) . "<br>";


// 4) Função para calcular o fatorial de um número
function fatorial($numero) {
    if ($numero < 0) {
        return "Não existe fatorial de número negativo";
    }

    $resultado = 1;

    for ($i = 1; $i <= $numero; $i++) {
        $resultado *= $i;
    }

    return $resultado;
}

echo "4) Fatorial: " . fatorial(5) . "<br>";


// 5) Função para calcular o valor total com desconto
function calcularDesconto($valor, $desconto) {
    $valorFinal = $valor - ($valor * $desconto / 100);
    return $valorFinal;
}

echo "5) Valor com desconto: R$ " .
number_format(calcularDesconto(200, 10), 2, ',', '.') . "<br>";

?>
