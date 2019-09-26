<?php
$text = <<< E
zsk - Zespół
szkół
Komunikacji
E;

echo 'Przed wywołaniem funkcji nl2br:<br>',$text;
echo '<hr>Po wywołanu funkcji nl2br:<br>';
echo nl2br($text);
  ?>
