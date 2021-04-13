<?php

include_once("libs/maLibUtils.php");
include_once("libs/maLibSQL.pdo.php");
include_once("libs/modeleSecurity.php"); 


if ($action = valider("action"))
{
	switch($action)
	{
		case 'CONNEXION' :
			if ($login = valider("login"))
			if ($password = valider("password"))
			{
				if ($newHash=logUser($login,$password))
					echo "Rediriger vers accueil en connaisant le hash : ".$newHash;
				else
					echo "Identifiants incorrectes";
			}
			break;

	}

}

?>










