<?php
$nome = $_POST['nome'] ?? 'Participante';

$perguntas = [
    1 => [
        'Qual linguagem estamos usando?',
        ['Java', 'PHP', 'Python'],
        'PHP'
    ],
    2 => [
        'Qual comando mostra uma mensagem na tela?',
        ['echo', 'input', 'start'],
        'echo'
    ],
    3 => [
        'Qual símbolo inicia uma variável PHP?',
        ['#', '$', '&'],
        '$'
    ],
    4 => [
        'Qual método envia dados pela URL?',
        ['POST', 'GET', 'SESSION'],
        'GET'
    ],
    5 => [
        'Qual comando inclui outro arquivo PHP?',
        ['include', 'repeat', 'start'],
        'include'
    ],
    6 => [
        'Qual é a extensão de um arquivo PHP?',
        ['.html', '.css', '.php'],
        '.php'
    ]
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Quiz PHP</title>
</head>
<body>

<h1>Quiz de PHP</h1>

<h3>Participante: <?= htmlspecialchars($nome) ?></h3>

<form action="resultado.php" method="POST">

<input type="hidden" name="nome" value="<?= htmlspecialchars($nome) ?>">

<?php foreach ($perguntas as $numero => $p): ?>

    <p><strong><?= $numero ?> - <?= $p[0] ?></strong></p>

    <?php foreach ($p[1] as $alternativa): ?>

        <input type="radio"
               name="q<?= $numero ?>"
               value="<?= htmlspecialchars($alternativa) ?>"
               required>

        <?= htmlspecialchars($alternativa) ?><br>

    <?php endforeach; ?>

<?php endforeach; ?>

<br>
<button type="submit">Finalizar Quiz</button>

</form>

</body>
</html>