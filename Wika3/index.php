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
      ?>
      <form class=""  method="get">
        <input type="text" name="name" value="" placeholder="Podaj imię"><br>
        <input type="text" name="surname" value="" placeholder="Podaj nazwisko"><br>
        <input type="submit" name="button" value="Zatwierdź">
      </form>
      <?php
    }
     ?>
  </body>
</html>
