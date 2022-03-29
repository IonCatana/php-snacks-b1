<?php
/* Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z */


$posts = [

  '10/01/2019' => [
    [
      'title' => 'Post 1',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 1'
    ],
    [
      'title' => 'Post 2',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 2'
    ],
  ],
  '10/02/2019' => [
    [
      'title' => 'Post 3',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 3'
    ]
  ],
  '15/05/2019' => [
    [
      'title' => 'Post 4',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 4'
    ],
    [
      'title' => 'Post 5',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 5'
    ],
    [
      'title' => 'Post 6',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 6'
    ]
  ],
];


/* for ($j=0; $j < count($posts) ; $j++) { 
    $element = array_keys($posts)[$j];
    //var_dump($element);
    echo $element;
    
    for ($i=0; $i < count($posts[$element]); $i++) {
    $elemento = $posts[$element][$i];
  // var_dump($element);
   echo $elemento['title'];
   echo $elemento['author'];
   echo $elemento['text'];
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

<body>

  <?php

  for ($j = 0; $j < count($posts); $j++) {
    $element = array_keys($posts)[$j]; ?>
    <h2> Data Creazione Post: <?php echo $element; ?> </h2>

    <?php
    for ($i = 0; $i < count($posts[$element]); $i++) {
      $elemento = $posts[$element][$i];
    ?>
      <p> Titolo: <?php echo $elemento['title']; ?> </p>
      <p> Autore: <?php echo $elemento['author']; ?> </p>
      <p> Descrizione Post: <?php echo $elemento['text']; ?> </p>
    <?php

    }
    ?>

  <?php }

  ?>

</body>

</html>