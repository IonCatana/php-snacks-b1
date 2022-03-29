<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
//var_dump($_GET['email']);
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];


if (strpos($email, '@') && strpos($email, '.') && strlen($name) >= 3 && intval($age)) {
  $result = 'Accesso riuscito';
} else {
  $result = 'Accesso negato';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Name, Email, Age</title>
</head>

<body>
  <h1> <?php echo $result; ?> </h1>
</body>

</html>