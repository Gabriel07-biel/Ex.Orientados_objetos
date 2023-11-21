    <?php
      include "ex127.php";
      $areaCalculada = 0;

      if($_SERVER['REQUEST_METHOD']=== 'POST' && isset($_POST['calculaArea'])){

        $retangulo = new retangulo();

        $ladoMaior = isset($_POST['ladoMaior']) ?
        floatval($_POST['ladoMaior']) : 0;
        $ladoMenor = isset($_POST['ladoMenor']) ?
        floatval($_POST['ladoMenor']) : 0;

        $retangulo->setLadoMaior($ladoMaior);

        $retangulo->setLadoMenor($ladoMenor);

        $areaCalculada = $retangulo->calculaArea();
      }
    ?>

    <!DOCTYPE html>
    <html lange="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
            content="width=device-width, initial-scale=1.0">
            <title>Calculadora de Área - Retângulo</title>
    </head>
    <body>
        <h1>Retângulo</h1>
        
        <?php if ($areaCalculada > 0): ?>
            <p> A área é: <?php echo $areaCalculada; ?></p>
            <?php else: ?>
                <form method="post" action="retangulo.php">
                    <label for="ladoMaior"> Informe a lagura: </label>
                    <input type="text" name="ladoMaior" required>
                    
                    <label for="ladoMenor">Informe a altura:</label>
                    <input type="text" name="ladoMenor" required>

                    <button type="submit" name="calculaArea"> Calcula Área</button>
            </form>
            <?php endif; ?>
            </body>
            </html>

    
