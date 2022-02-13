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

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $poids = $_POST['poids'];
    $taille = $_POST['taille'];
    $genre = $_POST['genre'];
    $IMC = $poids / ($taille*$taille) *10000;


$req = $bdd->prepare("INSERT INTO imc (nom, prenom, taille, poids, genre, IMC) VALUES(:nom, :prenom, :taille, :poids, :genre, :IMC )");
$req->execute(array(
 'nom' => $nom,
 'prenom' => $prenom,
 'taille' => $taille,
 'poids' => $poids,
 'genre' => $genre,
 'IMC' => $IMC
 ));
echo 'la requete a bien eté prise en compte';
?>
<p>Si vous voulez modifier vos paramétres, <a href="formulaire.2.3.2.HTML">clique ici<a/> pour revenir à la page formulaire.php.</p>



</body>	

	</html>