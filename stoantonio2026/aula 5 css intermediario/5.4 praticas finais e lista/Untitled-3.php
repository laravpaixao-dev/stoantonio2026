<?php
/*
  ========================================================================
  RESPOSTAS DA ATIVIDADE
  ========================================================================

  1) Qual é função de uma condição dentro da programação?
  R: Permite que o programa tome decisões e execute diferentes blocos de código 
     com base em validações lógicas (verdadeiro ou falso).

  2) Explique sobre o bloco if e else;
  R: O bloco 'if' (se) testa uma condição: se for verdadeira, executa um trecho de código. 
     O 'else' (senão) define o código alternativo que será executado caso a condição do 'if' seja falsa.

  3) Qual é a diferença entre o if e Switch?
  R: O 'if' é genérico e aceita comparações complexas, intervalos e operadores lógicos (&&, ||, >, <). 
     O 'switch' é ideal para comparar uma única variável com múltiplos valores fixos específicos (casos).

  4) A onde aplicamos os comandos de fluxo de controle for e while?
  R: Aplicamos para repetir trechos de código (laços de repetição). 
     - 'for': usado principalmente quando sabemos o número exato de iterações/repetições.
     - 'while': usado quando a repetição depende de uma condição que pode mudar a qualquer momento (número indeterminado de vezes).

  5) Qual é a função do laço de repetição na programação?
  R: Automatizar tarefas repetitivas, evitando que o programador precise escrever o mesmo código várias vezes.
*/


// ------------------------------------------------------------------------
// 6) Faça um algoritmo de uma tabuada 1 ao 10, usando o laço de repetição for.
// ------------------------------------------------------------------------
echo "=== EXERCÍCIO 6: TABUADA DO 1 AO 10 ===\n";
for ($i = 1; $i <= 10; $i++) {
    echo "Tabuada do $i:\n";
    for ($j = 1; $j <= 10; $j++) {
        $resultado = $i * $j;
        echo "$i x $j = $resultado\n";
    }
    echo "-----------------\n";
}


// ------------------------------------------------------------------------
// 7) Faça um programa em PHP que defina uma variável com o peso e a altura 
//    de uma pessoa. Calcule e mostre o IMC.
// ------------------------------------------------------------------------
echo "\n=== EXERCÍCIO 7: CÁLCULO DE IMC ===\n";
$peso = 70.0;  // Peso em kg
$altura = 1.75; // Altura em metros

$imc = $peso / ($altura * $altura);

echo "Peso: {$peso}kg | Altura: {$altura}m\n";
echo "IMC: " . number_format($imc, 2) . "\n";


// ------------------------------------------------------------------------
// 8) Faça uma página em HTML5 que leia o placar de um jogo de futebol (os gols 
