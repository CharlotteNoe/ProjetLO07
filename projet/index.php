<?php
session_start();
$_SESSION['login'] = "vide";
$_SESSION['statut'] = 2;
header('Location: app/router/router1.php?action=truc');
?>

