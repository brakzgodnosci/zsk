<?php
session_start();
$_SESSION['name']="Bogdan";
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sesja1</title>
  </head>
  <body>
    Zajebista strona<hr>
      Witamy
    <?php
echo $_SESSION['name'];
?>
 na stronie<br>
<?php
echo "Identyfikator sesji: ",session_id();
     ?>
     <br>
     <a href="./sesja2.php">Strona 2</a>
  </body>
</html>
