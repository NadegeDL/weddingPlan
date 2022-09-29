<?php
session_start();
$bdd= new PDD ('mysql:host=localhost;dbname=contact _db', 'root', 'root');
if(!$_SESSION['mdp']){
    header('Location: connexion.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher les membres</title>
</head>
<body>
    <?php 
    $recupUsers= $bdd->query('SELECT * FROM membres');
    while($user=recupUsers->fetch()){
        echo $['name']
    }
    ?>
</body>
</html>