<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Aeroporto</title>
</head>
<body>
    <h1>Teste Aeroporto</h1>
    <?php
      include "ex125-c.php";

      $aeroporto = new areoporto();
      $aeroporto->setNome("Aeroporto Internacional");
      $aeroporto->setCidade("Cidade Exemplo");
      echo "Nome do Aeroporto:". 
      $aeroporto->getNome() . "<br>";
      echo "Cidade do Aeroporto:" . 
      $aeroporto->getCidade() . "<br>";

    ?>
    
</body>
</html>