<?php
include 'ex129.php'; // Substitua 'Sequencia.php' pelo nome do arquivo onde você definiu a classe Sequencia.

// Inicializando variáveis
$sequencia = new Sequencia();

// Verificando se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['mostrar'])) {
    // Obtendo os valores do formulário e definindo a sequência
    $inicio = isset($_POST['inicio']) ? intval($_POST['inicio']) : 0;
    $fim = isset($_POST['fim']) ? intval($_POST['fim']) : 0;

    $sequencia->setInicio($inicio);
    $sequencia->setFim($fim);

    // Exibindo a sequência conforme a opção escolhida
    echo "<h2>Sequência Selecionada:</h2>";

    if ($_POST['mostrar'] === 'todos') {
        $sequencia->exibirTodosNumeros();
    } elseif ($_POST['mostrar'] === 'pares') {
        $sequencia->exibirPares();
    } elseif ($_POST['mostrar'] === 'impares') {
        $sequencia->exibirImpares();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência</title>
</head>
<body>

<h1>Sequência</h1>

<form method="post" action="sequencia.php">
    <label for="inicio">Selecione o valor inicial:</label>
    <input type="text" name="inicio" required>

    <label for="fim">Selecione o valor final:</label>
    <input type="text" name="fim" required>

    <p>Mostrar:</p>
    <input type="radio" name="mostrar" value="todos" checked> Todos
    <input type="radio" name="mostrar" value="pares"> Apenas os Pares
    <input type="radio" name="mostrar" value="impares"> Apenas os Ímpares

    <button type="submit">Mostrar a Sequência</button>
</form>

</body>
</html>