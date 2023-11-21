<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Quadrado</title>
</head>
<body>
    <h1>Teste Quadrado</h1>
    <?php
      include "ex126-a.php";

      $quadrado = new quadrado();
      $quadrado->setLado(7.0);

      echo "Área do quadrado:" . 
      $quadrado->calcularArea() . "<br>";
    ?>
    
</body>
</html>