<?php

include_once("libs/maLibSQL.pdo.php");
include_once("libs/maLibUtils.php");


function searchPrestation($criteres,$date, $ville, $coutMin, $coutMax) //tableau de critere non vide
{

}

function checkLogin(){
	if($passe==SQLGetChamp("SELECT passe FROM users WHERE pseudo='" . proteger($login) . "'"))
	return SQLGetChamp("SELECT id FROM users WHERE pseudo='" . proteger($login) . "'");
return false;
}

function verifBdd($criteres,$date, $ville, $coutMin, $coutMax) //tableau de critere non vide
{
	if($passe==SQLGetChamp("SELECT passe FROM users WHERE pseudo='" . proteger($login) . "'"))
		return SQLGetChamp("SELECT id FROM users WHERE pseudo='" . proteger($login) . "'");
	return false;
}

function reactiverConversation($idConversation)
{
	$SQL="UPDATE conversations SET active=1 WHERE id='" . proteger($idConversation) . "'";
	SQLUpdate($SQL);
}

function creerConversation($theme)
{
	$SQL="INSERT INTO conversations(theme) VALUES ('" . proteger($theme) . "')";
	return SQLInsert($SQL);
}

function supprimerConversation($idConv)
{
	$SQL="DELETE FROM conversations WHERE conversations.id='" . proteger($idConv) . "'";
	return SQLInsert($SQL);
}

function listerMessages($idConv)
{
	// Liste les messages de cette conversation
	// Champs à extraire : contenu, auteur, couleur 
	// en ne renvoyant pas les utilisateurs blacklistés
	$SQL="SELECT contenu,pseudo as auteur,couleur FROM messages m INNER JOIN users u ON m.idAuteur=u.id";
	$SQL.=" WHERE idConversation='" . proteger($idConv) . "' AND u.blacklist=0";
	$SQL.=" ORDER BY m.id ASC";
	return parcoursRs(SQLSelect($SQL));

}


?>
