<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="name" value="" placeholder="Imię" autofocus autocomplete="of"><br><br>
      <input type="submit" name="button" value="Zatwierdź"><hr>

    </form>
    <?php
if (isset($_POST['name'])) {
$name =$_POST['name'];
//zamiana na małe litery //
echo strtolower($name),'<br>';
//zamiana na duzymi litery //
echo strtoupper($name),'<br>';
//zamiana pierwsza duzej litery //
echo ucfirst($name),'<br>';
//zamiana kazde słowo  od duzej litery //
echo ucwords($name),'<br><hr>';
}
$lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing
elit, sed do eiusmod tempor incididunt ut labore et dolore magna
 aliqua. Ut enim ad minim veniam,
 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
 commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
 velit esse cillum
  dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
  non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
echo $lorem,'<br><hr>';
$cal = wordwrap($lorem,40,'<br>');
echo $cal;
//
//ob_clean();
//
$text ='Janusz';
$text1 =' Janusz ';
echo 'Długość tekstu $text: ',strlen($text),'<br>';
echo 'Długość tekstu $text: ',strlen($text1),'<br>';
echo strlen(ltrim($text1)),'<br>';
echo strlen(rtrim($text1)),'<br>';
echo strlen(trim($text1)),'<br><hr>';
//
$address = 'Poznań, ul. Fredry 13, tel. (61) 445-44-58';
$search = strstr($address, 'tel');
echo $search,'<br>';

$address = 'Poznań, ul. Fredry 13, tel. (61) 445-44-58';
$search = strstr($address, 'tel',true);
echo $search,'<br>';

$address = 'Poznań, ul. Fredry 13, tel. (61) 445-44-58';
$search = stristr($address, 'Tel');
echo $search,'<br>';

$mail =strstr('zsk@gmail.com','@');
echo $mail,'<br>';

$mail =strstr('zsk@gmail.com',64);
echo $mail,'<br><hr>';


echo strpos('abcdefg','cde'),'<br>';
echo  strpos('abcdefg','ab'),'<br><hr>';

$text1 = 'abcdab';
$text2 = 'ab';
echo strpos($text1,$text2),'<br>';
if (strpos($text1,$text2)===false) {
echo "Ciąg \$text2 nie zawiera się w ciągu \$text1<hr>";
}
else {
  echo "Ciąg \$text2 zawiera się w ciągu \$text1<hr>";
}
//
$replace = str_replace('zsk','***','zsk - Zespół Szkół Komunikacji');
echo $replace,'<br>';
//
$surname = substr('Janusz Kowalski',3);
echo $surname,'<br>';
//
$surname = substr('Janusz Kowalski',-3);
echo $surname,'<br>';
//
$surname = substr('Janusz Kowalski',7,-3);
echo $surname,'<br>';
//zamian polskich znaków
$login = 'żółć';
$censore =array('ą','ó','ę','ż','ź','ł','ć','ń','ś');
$replace =array('a','o','e','z','z','l','c','n','s');
$newLogin = str_ireplace($censore,$replace,$login);
echo $login,'<br>';
echo $newLogin,'<br>';

ob_clean();

/*Napisz aplikację cenzurującą zadanie przez użytkownika.
Użytkownik daje dane w formularzu.
Zmień słowa: biały, czarny na ciąg znaków '######'
Wyświetl dane w formacie:
  Dane przed poprawą:....
  Dane po popraiw:..... */

if (!empty($_POST['text'])) {
$text =$_POST['text'];
$censore =array('biały','czarny');
$replace =array('#####','#####');
$newtext = str_ireplace($censore,$replace,$text);
echo 'Dane przed poprawą : ',$text,'<br>';
echo 'Dane po poprawie : ',$newtext,'<br>';
}
else { ?>
     <form  method="post">
       <input type="text" name="text" value="" placeholder="Wpisz dane" autofocus>
      <input type="submit" name="button" value="Sprawdź">
     </form>
   <?php }
   ?>
  </body>
</html>
