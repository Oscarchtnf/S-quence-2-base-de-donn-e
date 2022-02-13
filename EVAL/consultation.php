<!DOCTYPE html>
    <html>
        

        <head>
             <meta charset="utf-8" />
            <title>Consultation</title>
        </head>

<body>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=oscar.chateauneuf;charset=utf8', 'oscar.chateauneuf', 
'8y7sVB');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<?php
$reponse = $bdd->query("SELECT * from Evaluation where "); 
while ($donnees = $reponse->fetch())
{
echo "Le"$donnees['Date_execution'].;
echo "à"$donnees['Time_execution'].;
echo",Mr"$donnees['NOM'].;
echo",Mr"$donnees['PRENOM'].;
echo $donnees['systeme']."</br>";
echo $donnees['rapport']."</br>";


}
$reponse->closeCursor();


$reponse = $bdd->closeCursor();
?>


<body/>	

	<html/>






