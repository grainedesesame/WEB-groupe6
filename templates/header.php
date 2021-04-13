<?php
// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php");
	die("");
}
?>

<!DOCTYPE html>

<html lang="fr">


<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
	<?php
	$title = valider("title"); 
	if (!$title) $title = "Accueil"; 
	echo "<title>$title</title>";
	?>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<script src="js/jquery-3.6.0.min.js"></script>
</head>

<body>

<div class="topnav">
    <a class="active" href="index.php">Accueil</a>
    <a id = "Inscription" href="index.php?view=formulaire">Inscription</a>
    <a id = "Connexion" href="index.php?view=connexion" >Connexion</a>
</div>