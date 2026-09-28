<?php

$nota1 = 0;
$nota2 = 0;

// Entrada das notas
$nota1 = (float) readline("Digite a Nota 1 (1 a 100): ");
$nota2 = (float) readline("Digite a Nota 2 (1 a 100): ");

// Calcula a média
$media = ($nota1 + $nota2) / 2;

// Mostra a média
echo "Média do aluno: " . $media . PHP_EOL;

// Verifica a situação
if ($media >= 60) {
    echo "Situação: PASSOU!" . PHP_EOL;
} elseif ($media >= 40) {
    echo "Situação: RECUPERAÇÃO!" . PHP_EOL;
} else {
    echo "Situação: REPROVOU!" . PHP_EOL;
}

?>