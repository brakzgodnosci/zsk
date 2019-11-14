<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>cookie</title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="name" value="">
      <input type="text" name="age" value="">
    </form>
    <?php
    if (isset($_POST['name'])) {
      // code...
    }
$_SESSION['name']="";
    ?>
  </body>
</html>
