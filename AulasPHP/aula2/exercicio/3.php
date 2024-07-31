<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
function fatorial($numero) {
    $fatorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $fatorial *= $i;
    }
    return $fatorial;
}

$numero = 5; 
echo "<h2>O fatorial de $numero é: </h2>" . fatorial($numero);

  ?>
</body>
</html>


