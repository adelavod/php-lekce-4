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
<div class="jumbotron" style="background-color: seashell">
<div class="container col-md-8">

    <form  action="vlozit.php" method="POST">
        <h4>Návštěvní kniha</h4>
        <br>

        <div class="form-group" >
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
</div>
</div>


<div class="jumbotron" style="background-color: seashell">
<?php  //výpis z návštěvní knihy
if (file_exists('soubor.txt')) {

    $handle = fopen('soubor.txt', 'r');

    if ($handle === false) {echo 'Soubor se nepodařilo otevřít!';}

    else
    { if($handle){$array = explode ("\n",fread($handle,4096 ));} //rozdeli soubot.txt na pole
    //sem dolů potřebuješ napsat kód, co ti vypíše pole $serazene pekne pod sebe

        $serazene = array_reverse($array);

foreach ($serazene as $prispevek){echo $prispevek;}
  }

        fclose($handle);
}

else {echo "Zatím nebyly vloženy žádné příspěvky.";}


    ?>
</div>

</body>
</html>