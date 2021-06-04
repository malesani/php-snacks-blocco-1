<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>snack 2</title>
</head>
<body>
<h1>snack 2</h1>
  <?php
  $data = $_GET;

  if(empty($_GET["name"]) || empty($_GET["mail"]) || empty($_GET["age"])){

    echo "Errore inserire i dati";

  }elseif (strlen($data["name"]) <= 3){

    echo "Errore nome troppo corto";

  }elseif (strpos($data["mail"],"@") === false || strpos($data["mail"],'.') === false){

    echo "Errore mail";

  }elseif (!is_numeric($data["age"])){

    echo "Errore inserisci una eta";
    
  }else{
    echo "Accesso riuscito";
  }
  ?>
</body>
</html>