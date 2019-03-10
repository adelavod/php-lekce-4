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
<div class="container">

    <form  action="vlozit.php" method="POST">
        <p>Návštěvní kniha</p>

        <div class="form-group">
            <label for="jmeno">Jméno</label>
            <input type="text" class="form-control" name="jmeno">
        </div>

        <div class="form-group">
        <label for="vzkaz">Vzkaz:</label>
        <textarea class="form-control" name="vzkaz" rows="3"></textarea> <!-- vstupní pole -->
        </div>

        <div class="form-group">
        <input type="submit" value="poslat"><!-- tlačítko pro odeslání formuláře -->
        </div>


    </form>

<?php  //výpis z návštěvní knihy
if (file_exists('soubor.txt')) {

    $handle = fopen('soubor.txt', 'r');

    if ($handle === false) {echo 'Soubor se nepodařilo otevřít!';}

    else {echo fread($handle, 1000);

        fclose($handle);}}

else {echo "Zatím nebyly vloženy žádné příspěvky.";}


    ?>
</div>
</body>
</html>