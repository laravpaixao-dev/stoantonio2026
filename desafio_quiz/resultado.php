<?php
$nome = $_POST['nome'] ?? 'Participante';

$respostasCorretas = [
    1 => 'PHP',
    2 => 'echo',
    3 => '$',
    4 => 'GET',
    5 => 'include',
    6 => '.php'
];

$acertos = 0;

foreach ($respostasCorretas as $numero => $resposta) {
    if (isset($_POST["q$numero"]) && $_POST["q$numero"] === $resposta) {
        $acertos++;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Quiz</title>
</head>
<body>

<h1>Resultado do Quiz!</h1>

<h2>Parabéns, <?= htmlspecialchars($nome) ?>!</h2>

<p>Você acertou <?= $acertos ?> de 6 perguntas.</p>

<a href="index.php">Voltar ao início</a>

</body>
</html>