<?php
session_start();

$_SESSION['Nom'] = $_GET['Nom'];
$_SESSION['Prenom'] = $_GET['Prenom'];

header('location:categories.php');

 ?>