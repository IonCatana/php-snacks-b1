<?php
/* Snack 1:
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */


$partite = [
  [
    'squadraCasa' => 'Olimpia Milano',
    'squadraOspite' => 'Cantù',
    'puntiCasa' => 55,
    'puntiOspite' => 60
  ],
  [
    'squadraCasa' => 'Roma',
    'squadraOspite' => 'Napoli',
    'puntiCasa' => 85,
    'puntiOspite' => 72
  ],
  [
    'squadraCasa' => 'Los Angeles Lakers',
    'squadraOspite' => 'Miami Heat',
    'puntiCasa' => 88,
    'puntiOspite' => 78
  ]
];

/* for ($i=0; $i < count($partite); $i++) { 
   $element = $partite[$i];
} */


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>partite</title>
</head>

<body>
  <h2>Partita</h2>

  <?php

  for ($i = 0; $i < count($partite); $i++) {
    $element = $partite[$i]; ?>

    <p>
      <?php echo $element['squadraCasa']; ?>
      <span>-</span>
      <?php echo $element['squadraOspite']; ?>
      <span>|</span>
      <?php echo $element['puntiCasa']; ?>
      <span>-</span>
      <?php echo $element['puntiOspite']; ?>
    </p>

  <?php }

  ?>

</body>

</html>