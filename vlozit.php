<body>
<?php
if (empty($_POST['jmeno']) || (empty($_POST['vzkaz'])))
    {echo "Nevložili jste jméno nebo vzkaz.<br> <a href='navstevni-kniha.php'>Zkusit znovu.</a>";}

else {
    if (isset($_POST['jmeno']) && isset($_POST['vzkaz']))
    {
        $a = $_POST['jmeno'];
        $b = $_POST['vzkaz'];

        $prispevek = "<b>$a</b>: <br> $b <hr>";

        $handle = fopen('soubor.txt', 'a');
        if ($handle === false) {
            echo "Soubor se nepodařilo otevřít.";
        } else {

            fwrite($handle, $prispevek);
            fclose($handle);

            echo "Příspěvek byl vložen. Děkujeme." . "<a href=navstevni-kniha.php>Zpět.</a>";
        }
    }

}
/*
$handle = fopen('soubor.txt', 'r');
    if ($handle === false) {
        echo 'Soubor se nepodařilo otevřít!';
    } else {
echo fread($handle, 1000);
    fclose($handle);}}
else{echo "Nic nevloženo DPČ.";}
*/
?>
</body>