<?php
$answer = 'no';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>Partie 1 Exercice 5</title>
</head>
<body>
  <?php
  if($answer == 'yes'){?>
    <p>vous avez répondu oui</p>
    <?php
  }
  elseif ($answer == 'no'){?>
    <p>vous avez répondue non</p>
    <?php
  }
  ?>
</body>
</html>
