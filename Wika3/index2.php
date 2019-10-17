<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">

      <input type="text" name="name" value="" placeholder="Podaj imię" autofocus><br>
      <input type="radio" name="country" value="p" checked>Polska
      <input type="radio" name="country" value="u">USA
      <input type="radio" name="country" value="g">Niemcy<br>
      <textarea name="note" rows="8" cols="80" placeholder="Podaj opis"></textarea>
      <input type="submit" name="button" value="Zatwierdź"><br><br>
    </form>
    <?php
    if (!empty($_POST['name']) && !empty($_POST['country'])) {
      $name = $_POST['name'];
      $country = $_POST['country'];
      $note = $_POST['note'];
      switch ($country) {
        case 'p':
          $country = "Polska";
        break;
        case 'u':
          $country = "USA";
        break;
        case 'g':
          $country = "Niemcy";
          break;
      }
      echo "Imię: ",$name," Kraj: ",$country,'<br> Opis:<br>',nl2br($note);

    }
     ?>
  </body>
</html>
