<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>cookie</title>
  </head>
  <body>
    <?php
    setcookie("age",20, time()+15);
echo $_COOKIE['age'];
    ?>
  </body>
</html>
