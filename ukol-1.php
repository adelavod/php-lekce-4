<?php

echo 'Historie přístupů:<br>';
$handle = fopen('pristupy.txt', 'a');

$text = date('Y-m-d H:i:s') . '<br>';

if ($handle === false) {
    echo 'Soubor se nepodařilo otevřít!';
} else {
  fwrite ($handle, $text);
    fclose($handle);

    $handle = fopen('pristupy.txt', 'r');


    if ($handle === false) {
        echo 'Soubor se nepodařilo otevřít!';
    } else {
echo fread($handle, 1000);
fclose($handle);}}