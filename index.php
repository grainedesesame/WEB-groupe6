<?php

	include_once("libs/maLibUtils.php");

	include("templates/header.php");

	// on récupère le paramètre view éventuel 
	$view = valider("view"); 

	// S'il est vide, on charge la vue accueil par défaut
	if (!$view) $view = "recherche_prestation"; 

	if (file_exists("templates/$view.php"))
		include("templates/$view.php");


	// Dans tous les cas, on affiche le pied de page
	// Qui contient les coordonnées de la personne si elle est connectée
	include("templates/footer.php");


	
?>
