<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lainalaskuri</title>
</head>
<body>
 <h3>Lainalaskuri</h3>
 
  <?php
  $sum = filter_input(INPUT_POST,'sum',FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
  $int  = filter_input(INPUT_POST,'korko',FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
  $time  = filter_input(INPUT_POST,'aika',FILTER_SANITIZE_NUMBER_INT);
  
  $intd = $int / 100;
  $timem = $time * 12;

  $jaettava=$intd/12 * pow(1+$intd/12,$timem);
  $jakaja=pow(1+$intd/12,$timem)-1;

  $lyh = $jaettava / $jakaja*$sum;
 
  printf("<p>Lyhennyssumma on %.2f € </p>",$lyh);
  ?>

  <a href="index.php">Laske uudestaan</a>
</body>
</html>