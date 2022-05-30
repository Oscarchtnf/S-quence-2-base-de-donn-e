<!DOCTYPE html>
    <html>
        

        <head>
             <meta charset="utf-8" />
            <title>Fiche technicien</title>
        </head>

<body>

<?php

$bdd = new PDO('mysql:host=localhost;dbname=oscar.chateauneuf;charset=utf8', 'oscar.chateauneuf', '');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$NOM =$_POST['NOM'];
$PRENOM =$_POST['PRENOM'];
$systeme =$_POST['systeme'];
$rapport =$_POST['rapport'];
$date = date('d-m-y');
    $time = date('h:i:s');
    $datetime = date('d-m-y h:i:s');
     echo '</br>' . $datetime;
     echo '</br>' . $date;
     echo '</br>' . $time;

$req = $bdd->prepare("INSERT INTO Evaluation (NOM, PRENOM, systeme, rapport, Date_execution, Moment_execution, FullDate_execution) VALUES (:NOM, :PRENOM, :systeme, :rapport, :Date_execution, :Moment_execution, :FullDate_execution )");
$req->execute(array(
'NOM'=> $NOM,
'PRENOM' => $PRENOM,
'systeme' => $systeme,
'rapport' => $rapport,
'Date_execution' => $date,
         'Moment_execution' => $time,
         'FullDate_execution' => $datetime


));
echo 'la requete a bien eté executée';
?>
</body>
</html>
