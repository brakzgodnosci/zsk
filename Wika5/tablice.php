<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //tablice numeryczne
    $colors = array('Red','Green','Blue');
    $colors[3] ='Magenta';
    for ($i=0; $i < count($colors); $i++) {
      $elem = $i +1;
      echo 'Element ', $elem,' : ', $colors[$i],'<br>';
    }
    echo "<hr>";
    // w funkcji
    function showArray($tab)
    {
      for ($i=0; $i < count($tab); $i++) {
        $elem = $i +1;
        echo 'Element ', $elem,' : ', $tab[$i],'<br>';
      }
      echo "<hr>";
    }
    showArray($colors);

    //foreach

    foreach ($colors as $key => $value) {
      $elem = $key +1;
      echo 'Element ', $elem,' : ', $value,'<br>';
    }
    echo "<hr>";
    //

    foreach ($colors as $value) {
      echo 'Element  : ', $value,'<br>';
    }
    echo "<hr>";
    // tablice asocjacyjne
    $data = array('Imie' =>'Kinga' ,'Nazwisko' =>'Zamrozek' , 'Wiek' => 82,'Płeć' =>'Inna'  );

    function showArrayAss($data)
    {
      foreach ($data as $key =>$value) {
        echo $key,' : ', $value,'<br>';
      }
    }
    showArrayAss($data);
    echo "<hr>";
    echo $data['Nazwisko'],"<hr>";
    echo 'Nazwisko : ',$data['Nazwisko'],'<br>';
    echo "<hr>";
    //tablica wielowymiarowa
    $student = array(
    array('Katarzyna', 'Nowak', 30),
    array('Anna'),
    array('Wiktoria', 'Lipa'));
function Tablice($student)
{
  foreach ($student as $valu) {
    foreach ($valu as $value) {
      echo  $value,'<br>';
        }
      }

}
function Tablica($student)
{
  for ($i=0; $i <count($student) ; $i++) {
    for ($j=0; $j < count($student[$i]); $j++) {
      echo  $student[$i][$j],'<br>';
  }
}
}


Tablice($student);
echo "<hr>";
Tablica($student);
echo "<hr>";

$tablica = array(
  array('Anna Nowak'),
  array('Paweł'),
  array( array('A1','A2'),'B','C'),
  array('E','F')
);
/*function TrzyWymiar($tablica)
{
foreach ($tablica as $key => $value) {
  if (is_array($value)) writeRecu($value) {
    writeRecu($value);
  }
  else {
    echo $value,'<br>';
  }
}
}
TrzyWymiar($tablica); */

$tab = array(10,2,3,5,75,100,-1);
foreach ($tab as $value) {
  echo $value,' ';
}
echo "<hr>";
sort($tab);
foreach ($tab as $value) {
  echo $value,' ';
}

echo "<hr>";
rsort($tab);
foreach ($tab as $value) {
  echo $value,' ';
}

echo "<hr>";
$tab = array('katarzyna','Zenon','Anna','paweł');
foreach ($tab as $value) {
  echo $value,' ';
}
echo "<hr>";
sort($tab);
foreach ($tab as $value) {
  echo $value,' ';
}
// sortowanie tablicy asocjacyjnej
echo "<hr>";
$data = array(
array('Katarzyna', 'Nowak', 30),
array('Anna'),
array('Wiktoria', 'Lipa'));

 asort($data);
 foreach ($data as $key =>$value) {
   echo $key,' : ', $value,'<br>';
 }
 echo "<hr>";
 arsort($data);
 foreach ($data as $key =>$value) {
   echo $key,' : ', $value,'<br>';
 }
  echo "<hr>";
///
var_dump($data)
     ?>
  </body>
</html>
