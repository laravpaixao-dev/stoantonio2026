/*
ATIVIDADE - PHP

1) Qual é a função de uma condição dentro da programação?

Resposta:
Uma condição serve para verificar se uma determinada situação é verdadeira
ou falsa e, dependendo do resultado, executar um determinado comando.


2) Explique sobre o bloco if e else.

Resposta:
O "if" é usado para executar um código caso uma condição seja verdadeira.
O "else" é executado quando a condição do "if" for falsa.

Exemplo:

if ($idade >= 18) {
    echo "Maior de idade";
} else {
    echo "Menor de idade";
}


3) Qual é a diferença entre o if e Switch?

Resposta:
O "if" é usado principalmente para verificar condições específicas,
podendo trabalhar com diferentes tipos de comparações.

O "switch" é utilizado quando queremos comparar uma mesma variável
com vários valores diferentes.

Exemplo:

switch ($opcao) {
    case 1:
        echo "Você escolheu 1";
        break;

    case 2:
        echo "Você escolheu 2";
        break;

    default:
        echo "Opção inválida";
}


4) Aonde aplicamos os comandos de fluxo de controle for e while?

Resposta:
Os comandos "for" e "while" são utilizados para criar repetições
(laços de repetição).

O "for" geralmente é utilizado quando sabemos quantas vezes
queremos repetir uma ação.

O "while" é utilizado quando a repetição depende de uma condição.


5) Qual é a função do laço de repetição na programação?

Resposta:
O laço de repetição serve para executar várias vezes um determinado
bloco de código, evitando escrever o mesmo código várias vezes.


6) Faça um algoritmo de uma tabuada 1 ao 10, usando o laço de repetição for.

Exemplo em PHP:

for ($i = 1; $i <= 10; $i++) {

    echo "Tabuada do $i:" . PHP_EOL;

    for ($j = 1; $j <= 10; $j++) {
        $resultado = $i * $j;

        echo "$i x $j = $resultado" . PHP_EOL;
    }

    echo PHP_EOL;
}


7) Faça um programa em PHP que defina uma variável com o peso e a altura
de uma pessoa. Calcule e mostre o IMC.

Exemplo em PHP:

$peso = 70;
$altura = 1.75;

$imc = $peso / ($altura * $altura);

echo "IMC: " . $imc;


8) Faça uma página em HTML5 que leia o placar de um jogo de futebol
(os gols de cada time, um em cada variável do tipo inteiro).
Informe se houve empate ou se a vitória foi do 1º ou do 2º time.
A entrada pode ter o nome dos dois times.

Exemplo em PHP:

$time1 = "Flamengo";
$time2 = "Palmeiras";

$gols1 = 2;
$gols2 = 1;

if ($gols1 > $gols2) {

    echo "Vitória do $time1";

} elseif ($gols2 > $gols1) {

    echo "Vitória do $time2";

} else {

    echo "Empate";

}


9) Faça um programa em PHP que mostre todos os números inteiros
de 100 a 200 com incremento de 2 em 2.

Exemplo em PHP:

for ($i = 100; $i <= 200; $i += 2) {
    echo $i . PHP_EOL;
}


10) Faça um programa em PHP que apresente todos os valores ímpares
no intervalo de 500 a 1000.

Exemplo em PHP:

for ($i = 500; $i <= 1000; $i++) {

    if ($i % 2 != 0) {
        echo $i . PHP_EOL;
    }

}

*/
?>