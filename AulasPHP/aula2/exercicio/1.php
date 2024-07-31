<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  function somaNumeros($N) {
      $soma = 0;
      for ($i = 1; $i <= $N; $i++) {
          $soma += $i;
      }
      return $soma;
  } 
  echo "<h2>A soma dos números de 1 até 10 é: </h2>" . somaNumeros(10);

  ?>
</body>
</html>


