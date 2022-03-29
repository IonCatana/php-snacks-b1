<?php
/* Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. */

$db = [
  'teachers' => [
    [
      'name' => 'Michele',
      'lastname' => 'Papagni'
    ],
    [
      'name' => 'Fabio',
      'lastname' => 'Forghieri'
    ]
  ],
  'pm' => [
    [
      'name' => 'Roberto',
      'lastname' => 'Marazzini'
    ],
    [
      'name' => 'Federico',
      'lastname' => 'Pellegrini'
    ]
  ]
];


/* for ($j=0; $j < count($db) ; $j++) { 
    $element = array_keys($db)[$j];
    //var_dump($element);
    // echo $element;
   // echo $element['teachers'];
    for ($i=0; $i < count($db[$element]); $i++) {
    $elemento = $db[$element][$i];
  // var_dump($element);
  // echo $elemento['name'];
   // echo $elemento['lastname'];
}
}; */


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 3</title>
</head>
<style>
  div {
    height: 200px;
    width: 400px;
  }

  .teachers {
    background-color: grey;
  }

  .pm {
    background-color: green;
  }
</style>

<body>

  <?php

  for ($j = 0; $j < count($db); $j++) {
    $element = array_keys($db)[$j]; ?>
    <h2> Tipologia: <?php echo $element; ?> </h2>
    <?php
    if ($element === 'teachers') {
    ?>
      <div class="teachers">
        <?php
        for ($i = 0; $i < count($db[$element]); $i++) {
          $elemento = $db[$element][$i];
        ?>
          <p>Nome: <?php echo $elemento['name']; ?> </p>
          <p>Cognome: <?php echo $elemento['lastname']; ?> </p>
        <?php

        }
        ?>
      </div>

    <?php
    } else {
    ?>
      <div class="pm">
        <?php
        for ($i = 0; $i < count($db[$element]); $i++) {
          $elemento = $db[$element][$i];
        ?>
          <p>Nome: <?php echo $elemento['name']; ?> </p>
          <p>Cognome: <?php echo $elemento['lastname']; ?> </p>
        <?php

        }
        ?>
      </div>
    <?php
    }
    ?>

  <?php }

  ?>

</body>

</html>