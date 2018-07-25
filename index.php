<?php
//défintion de la variable age et de sa valeur
$age = 4;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice</title>
  </head>
  <body>
    <p>
<?php
//défintion de la condition
if ($age >= 18) // si l'age est supérieur ou égale à 18 ans
{
  echo 'Vous êtes majeur';
} else { //sinon (si age est inférieur à 18)
  echo 'Vous etes mineur';
}
 ?>

    </p>

  </body>
</html>
