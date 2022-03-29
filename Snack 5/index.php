<?php
/* Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. */

$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi cumque cupiditate illum non nam libero illo, esse unde inventore harum, neque qui aut aliquam quaerat delectus alias nostrum omnis quod.Dolorum distinctio, tenetur reiciendis at quasi error dignissimos nihil voluptates obcaecati, est, optio possimus? Similique quasi esse delectus, quas excepturi impedit doloremque eligendi aliquid eveniet soluta ut velit blanditiis nesciunt.Perspiciatis officia enim magni beatae tempore repudiandae consequuntur atque facilis maxime? Natus corrupti harum earum quas temporibus non quibusdam quod eligendi dignissimos voluptatibus provident cupiditate inventore, esse perspiciatis sint nostrum.Porro incidunt, quibusdam optio debitis quam aut aliquam reiciendis fugiat officia sint dicta laudantium vero doloremque, quidem molestiae ducimus quia impedit, labore laboriosam aspernatur quaerat? Sequi illum optio et velit!Velit itaque perspiciatis sapiente quisquam deserunt, illo corporis ut harum ex. Ea est fuga, veniam obcaecati, odio, hic voluptatum amet repellendus sapiente tempore modi saepe quibusdam ducimus nam sunt? Voluptatum!";

// echo $text;

$textMultiple = str_replace('.', '.<p>', $text);

// echo $textMultiple;



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paragraph</title>
</head>

<body>
  <div>
    <h2>Paragrafo Originale</h2>
    <p></strong> <?php echo $text; ?> </p>
  </div>
  <div>
    <h2>Paragrafi Multipli</h2>
    <p> <?php echo $textMultiple; ?> </p>
  </div>
</body>

</html>