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

 ?>
