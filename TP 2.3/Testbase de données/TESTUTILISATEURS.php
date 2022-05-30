<!DOCTYPE html>
    <html>
        

        <head>
             <meta charset="utf-8" />
            <title>Titre</title>
        </head>

<body>

<?php

$bdd = new PDO('mysql:host=localhost;dbname=oscar.chateauneuf;charset=utf8', 'oscar.chateauneuf', '***');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$Login = $_POST['Login'];
$Password =$_POST['Password'];
$superUser =$_POST['superUser'];


$req = $bdd->prepare("INSERT INTO utilisateurs (Login, Password, superUser) VALUES (:Login, :Password, :superUser )");
$req->execute(array(
'Login'=> $Login,
'Password' => $Password,
'superUser' => $superUser
));
echo 'la requete a bien eté prise en compte';
?>
</body>
</html>
