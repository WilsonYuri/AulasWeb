<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
function primo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

$numero = 17;
if (primo($numero) == true) {
    echo "<h2>$numero é um número primo.</h2>";
} else {
    echo "<h2>$numero não é um número primo.</h2>";
}
?>
</body>
</html>


