<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  /*
    $i =1;
    while($i <= 10){
      echo $i . "<br>";
      $i++;
    }
  */
  /*
    $i = 1;
    do{
      echo $i . "<br>";
      $i++;
    }
    while($i < 20);
  */
  /*
  for ($i = 1; $i < 10; $i++) {
    echo $i . "<br>";
  }
  */
  for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
    if($i == 5){
      break;
    }
  }

  ?>
</body>
</html>