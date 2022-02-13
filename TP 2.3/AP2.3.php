<!DOCTYPE html>
    <html>
        

        <head>
             <meta charset="utf-8" />
            <title>Titre</title>
        </head>

<body>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=oscar.chateauneuf;charset=utf8', 'oscar.chateauneuf', 
'8y7sVB');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<?php
$reponse = $bdd->query("SELECT * from imc where poids>65"); 
while ($donnees = $reponse->fetch())
{
echo $donnees['nom']." : ";
echo $donnees['poids']."</br>";
}
$reponse->closeCursor();


$reponse = $bdd->closeCursor();
?>





<body/>	

	<html/>