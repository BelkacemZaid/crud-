<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="Prenom" placeholder="Prenom">
        <input type="text" name="lastname" placeholder="lastname">
        <input type="text" name="Email" placeholder="Email">
        <button type="submit"> valider </button>
    </form>
<?php

$prenom=$_POST["Prenom"];
$lastname=$_POST["lastname"];
$Email=$_POST["Email"];

$dbname = "gestion_eleves";
    $user = "root";
    $passwd = "";

    $connexion = new PDO("mysql:host=localhost;dbname=$dbname", $user, $passwd);
    $requete = "INSERT INTO eleves (prenom, nom, email) VALUES (:prenom, :nom, :email)";
    $tempo=$connexion->prepare($requete);
    $tempo->bindParam(":prenom",$prenom);
    $tempo->bindParam(":nom",$lastname);
    $tempo->bindParam(":email",$Email);
    $tempo->execute();
?>
</body>
</html>