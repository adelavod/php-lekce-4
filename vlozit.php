<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="jumbotron">
    <?php
    if (empty($_POST['jmeno']) || (empty($_POST['vzkaz'])))
    {echo "Nevložili jste jméno nebo vzkaz.<br> <a href='navstevni-kniha.php'>Zkusit znovu.</a>";}

    else {
        if (isset($_POST['jmeno']) && isset($_POST['vzkaz']))
        {
            $a = $_POST['jmeno'];
            $b = $_POST['vzkaz'];

            $prispevek = "<b>$a</b>: <br> $b <hr>"."\n";

            $handle = fopen('soubor.txt', 'a');
            if ($handle === false)
            {
                echo "Soubor se nepodařilo otevřít.";
            }

            else
            {

                fwrite($handle, $prispevek);
                fclose($handle);

                ?> <p align="center">Příspěvek byl vložen. Děkujeme.  <br><br><a  href=navstevni-kniha.php>Zpět.</a></p>

                <?php
            }
        }
    }

    ?>



</div>
</body>
</html>

