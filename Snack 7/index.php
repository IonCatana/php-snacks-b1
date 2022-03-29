<?php
/* Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. */

$students = [
  [
    'nome' => 'Luca',
    'cognome' => 'Rossi',
    'voti' => [4, 7, 2, 5, 3, 6]
  ],
  [
    'nome' => 'Maria',
    'cognome' => 'Bianchi',
    'voti' => [3, 9, 6, 7, 8, 9]
  ],
  [
    'nome' => 'Paola',
    'cognome' => 'Verdi',
    'voti' => [7, 10, 5, 8, 9, 6]
  ]
];

// var_dump($students[0]['voti']);
/* 
for ($i=0; $i < count($students) ; $i++) { 
    $element = $students[$i];
     // var_dump($element);
    echo $element['nome'];
    echo $element['cognome'];
    $lengthVotes = count($element['voti']);
    var_dump($lengthVotes);
    $sumVotes = array_sum($element['voti']);
    var_dump($sumVotes);
    $averageVotes = $sumVotes / $lengthVotes;
    var_dump($averageVotes);
    echo $averageVotes;
}; */







?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Average</title>
</head>

<body>

  <?php

  for ($i = 0; $i < count($students); $i++) {
    $element = $students[$i];
    $lengthVotes = count($element['voti']);
    $sumVotes = array_sum($element['voti']);
    $averageVotes = $sumVotes / $lengthVotes;


  ?>

    <p> <strong>Alunno:</strong> <?php echo $element['nome']; ?>
      <?php echo $element['cognome']; ?>
    </p>

    <p> <strong>Media dei Voti:</strong> <?php echo $averageVotes ?></p>

  <?php }

  ?>
</body>

</html>