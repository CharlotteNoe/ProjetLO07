<?php
session_start();
$_SESSION['login'] = "vide";
$_SESSION['statut'] = 2;
$_SESSION['prenom']= "vide";
$_SESSION['nom']= "vide";
header('Location: app/router/router1.php?action=truc');
?>

