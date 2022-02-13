<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Datetemps</title>
    </head>
    <body>
<?php

$bdd = new PDO('mysql:host=localhost;dbname=oscar.chateauneuf;charset=utf8','oscar.chateauneuf','8y7sVB');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);{
    $date = date('d-m-y');
    $time = date('h:i:s');
    $datetime = date('d-m-y h:i:s');
     echo '</br>' . $datetime;
     echo '</br>' . $date;
     echo '</br>' . $time;

}
{
    $req = $bdd->prepare("INSERT INTO `AP2-3` (Date_execution, Moment_execution, FullDate_execution) VALUES (:Date_execution, :Moment_execution, :FullDate_execution)");
        $req->execute(array(
         'Date_execution' => $date,
         'Moment_execution' => $time,
         'FullDate_execution' => $datetime
     ));
        echo '<br> la requete a bien été éxecutée';
}
?>
    </body>
</html>