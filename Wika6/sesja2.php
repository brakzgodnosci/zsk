<?php
session_start();
$_SESSION['name']="Bogdan";
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sesja2</title>
  </head>
  <body>
    Zajebista strona 2<hr>
      Witamy
    <?php
echo $_SESSION['name'];
?>
 na stronie<br>
<?php
echo "Identyfikator sesji: ",session_id();
     ?>
     <br>
     <a href="./sesja3.php">Strona 3</a>
  </body>
</html>
