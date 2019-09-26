<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // zmienne superglobalne
    // $_GET, $_POST ,
    echo $_SERVER['SERVER_PORT'],'<br>'; //80
    echo $_SERVER['SERVER_NAME'],'<br>';
    echo $_SERVER['SCRIPT_NAME'],'<br>';
    echo $_SERVER['SERVER_PROTOCOL'],'<br>';
    echo $_SERVER['DOCUMENT_ROOT'],'<br>';

    $localFile = $_SERVER['DOCUMENT_ROOT'];
    $localFile .= $_SERVER['SCRIPT_NAME'];

    echo $localFile,'<br><hr>';

    //

    define('NAZWISKO','Kowal');
    echo NAZWISKO;

    define('nazwisko','Nowak');
    echo nazwisko;


    define('IMIE','Janusz', true); //od wersji 8php brak 3 argumentu
    echo imie,'<br><hr>';
    //
    echo PHP_VERSION,'<br>';
    echo gettype(PHP_VERSION),'<br>';

    if(PHP_VERSION > 5.6){
      echo 'Nowa wersja php<br>';
    }
    else {
      echo 'Stara wersja php<br>';
    }

    echo PHP_OS,'<br>';
    echo __LINE__,'<br>';
    echo __FILE__,'<br>';
    echo __DIR__,'<br><hr>';






    ?>
  </body>
</html>
