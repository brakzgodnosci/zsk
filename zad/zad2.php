<?php
$potega =2**10;
echo $potega,'<br><hr>';
//
//operatory bitowe: and &, or |, not ~~, xor ^,>>,<<
$x = 0b1010;
$x = $x >> 1; //101(2)=5
$x = $x << 2; //10100(2)=20
echo $x,'<br><hr>';
//
$x = 11;
$y = 1.0;
$wynik = $x <=> $y; //jeśli po lewej str jest większy to 1. Jeśli po prawej większy to -1. Jeśli równe to 0

echo $wynik,'<hr>';
//
echo gettype($x),'<br>';//intige
echo gettype($y),'<br><hr>';//double
//
if($x==$y){
  echo "identyczne <br><hr>";
}
else {
echo "różne<br><hr>";
}
//
$x = 2;
echo $x++,'<br>';//2
echo ++$x,'<br>';//4
echo $x,'<br>';//4
$y = $x++;
echo $y,'<br>';//4
$y = ++$x;
echo $y,'<br>';//6
echo ++$y,'<br><hr>';//7
//
//bool, int, float, string, array, object, unset
$text = '42abc';
$text1 = -1;
$text2 = 20;


$x = (int)$text;
$x1 =(bool)$text1;
$x2 =(unset)$text2;


echo $x,'<br>';
echo $x1,'<br>'; //jak wartosć jest 0 nic nie wyświetla
echo 'unset:',$x2,'<br>';
echo 'unset:',gettype($x2),'<br><hr>';

// rozmiar typu
echo PHP_INT_SIZE,'<br><hr>';
//
$w;
echo @gettype($w);


 ?>
