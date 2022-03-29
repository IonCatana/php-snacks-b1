<?php
/* Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */

$randomNumbers = [];

while (count($randomNumbers) < 15) {
  $number = rand(0, 100);
  // echo $number;


  if (!in_array($number, $randomNumbers)) {
    $randomNumbers[] = $number;
  }
}
var_dump($randomNumbers);
