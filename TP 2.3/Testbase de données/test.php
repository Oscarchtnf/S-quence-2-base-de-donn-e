<!DOCTYPE html>
    <html>
        

        <head>
             <meta charset="utf-8" />
            <title>Titre</title>
        </head>

<body>

<?php

$bdd = new PDO('mysql:host=localhost;dbname=oscar.chateauneuf;charset=utf8', 'oscar.chateauneuf', '8y7sVB');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$NOM = $_POST['NOM'];
$PRENOM =$_POST['PRENOM'];
$CLASSE =$_POST['CLASSE'];
$MATIERE =$_POST['MATIERE'];
$NOTE =$_POST['NOTE'];

$req = $bdd->prepare("INSERT INTO TESTzinc (NOM, PRENOM, CLASSE, MATIERE, NOTE) VALUES (:NOM, :PRENOM, :CLASSE, :MATIERE, :NOTE )");
$req->execute(array(
'NOM'=> $NOM,
'PRENOM' => $PRENOM,
'CLASSE' => $CLASSE,
'MATIERE' => $MATIERE,
'NOTE' => $NOTE


));
echo 'la requete a bien eté prise en compte';
?>
</body>
</html>