<?php
session_start();

	include_once "libs/maLibUtils.php";
	include_once "libs/maLibSQL.pdo.php";
	include_once "libs/maLibSecurisation.php"; 
	include_once "libs/modele.php"; 

	$qs = "";

	if ($action = valider("action"))
	{
		ob_start ();

		echo "Action = '$action' <br />";

		// ATTENTION : le codage des caractères peut poser PB 
		// si on utilise des actions comportant des accents... 
		// A EVITER si on ne maitrise pas ce type de problématiques

		/* TODO: exercice 4
		// Dans tous les cas, il faut etre logue... 
		// Sauf si on veut se connecter (action == Connexion)

		if ($action != "Connexion") 
			securiser("login");
		*/
		if ($_SESSION['connecte']) {
			$idUser = $_SESSION['idUser'];
		}
		// Un paramètre action a été soumis, on fait le boulot...
		switch($action)
		{
			
			// Connexion //////////////////////////////////////////////////


			case 'Connexion' :
				// On verifie la presence des champs login et passe
				if ($login = valider("login"))
					if ($passe = valider("passe"))
					{
						if (verifUser($login,$passe))
							$qs="?view=accueil";
						else
							$qs="?view=login&message=".urlencode("Erreur sur login/mot de passe");
					}
				break;
			case 'Logout':
				session_destroy();
				$qs="?view=accueil";
				break;

			case 'Valider':
				if ($idEtape = valider("idEtape"))
				if ($idProjet = valider("idProjet"))
				if ($url = valider("url"))
				if ($date = valider("date"))
				if ($idUser = valider("idUser","SESSION"))
				{
					creerContribution($idEtape,$idUser,$date, $url);
					$qs="?view=contributions&idProjet=$idProjet";
					break;
				}
				$qs="?view=accueil";
				break;

			case 'Creer projet':
				if ($nomProjet = valider("nomProjet"))
				if ($anneeScolaire = valider("anneeScolaire"))
				if ($idUser = valider("idUser","SESSION"))
				if(isProf($idUser))
				{
					creerProjet($idUser,$anneeScolaire,$nomProjet);
					$qs="?view=projets";
					break;
				}
				$qs="?view=projets";
				break;
			
			case 'Creer etape':
				if ($idProjet = valider("idProjet"))
				if ($dateFinEtape = valider("dateFinEtape"))
				if ($descriptionEtape = valider("descriptionEtape"))
				if ($idUser = valider("idUser","SESSION"))
				if(isProf($idUser))
				{
					creerEtape($idProjet,$descriptionEtape,$dateFinEtape);
					$qs="?view=contributions&idProjet=$idProjet";
					break;
				}
				$qs="?view=accueil";
				break;
		}

	}

	// On redirige toujours vers la page index, mais on ne connait pas le répertoire de base
	// On l'extrait donc du chemin du script courant : $_SERVER["PHP_SELF"]
	// Par exemple, si $_SERVER["PHP_SELF"] vaut /chat/data.php, dirname($_SERVER["PHP_SELF"]) contient /chat

	$urlBase = dirname($_SERVER["PHP_SELF"]) . "/index.php";
	// On redirige vers la page index avec les bons arguments

	header("Location:" . $urlBase . $qs);
	//qs doit contenir le symbole '?'

	// On écrit seulement après cette entête
	ob_end_flush();
	
?>










