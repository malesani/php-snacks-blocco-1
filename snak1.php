<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1>Snack 1</h1>
<?php
  $calendario = [
    [
      "team1" => "milano",
      "team2" => "napoli",
      "score1" => "55",
      "score2" => "60"
      
    ],
    [
      "team1" => "roma",
      "team2" => "padova",
      "score1" => "10",
      "score2" => "40"
    ]
  ];
?>

<ul>
  <?php foreach ($calendario as $partidos){?>
    <li>
      <?php echo $partidos["team1"]?> - <?php echo $partidos["team2"]?> | <?php echo $partidos["score1"]?> | <?php echo $partidos["score2"]?>
    </li>
  <?php }?>
</ul>

</body>
</html>