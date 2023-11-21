<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Triângulo</title>
</head>
<body>
    <h1>Teste Triângulo</h1>
    <?php
      include "ex126-d.php";

      $triangulo = new triangulo();
      $triangulo->setBase(2.0);
      $triangulo->setAltura(1.0);


      echo "Área do triângulo:" . 
      $triangulo->calcularArea() . "<br>";
    ?>
    
</body>
</html>