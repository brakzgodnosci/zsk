<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (!empty($_GET['name']) && !empty($_GET['surname'])&& isset($_GET['button'])) {
      echo 'ok';
    }
    else {
      require './form22.php';
    }
     ?>
  </body>
</html>
