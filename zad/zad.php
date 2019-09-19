<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //phpinfo(); fajne
      $name = 'Wiktoria';
      $surname = 'Nowak';
        echo 'Wiataj ',$name,' ',$surname,'!<br><hr>';
//
      $całkowiata = 10;
      $hex = 0xA;
      $oct = 021;
      $bin = 0b1010;
      echo $hex,'<br>';
      echo $oct,'<br>';
      echo $bin,'<br><hr>';
//
echo <<< ETYKIETA
Imię: $name<br>
Nazwisko: $surname<br><hr>
ETYKIETA;
//
$text = <<< ETYKIETA
Heredoc<br>
Imię: $name<br>
Nazwisko: $surname<br><hr>
ETYKIETA;
echo $text;
//
$textNowdoc = <<< 'E'
Nowdoc<br>
Imię: $name<br>
Nazwisko: $surname<br><hr>
E;
echo $textNowdoc;
//
echo "Nazwa zmiennej: \$name, wynosi: $name <br>";

echo 'Nazwa zmiennej: $name, wynosi:', $name,"<br><hr>";
//

     ?>
  </body>
</html>
