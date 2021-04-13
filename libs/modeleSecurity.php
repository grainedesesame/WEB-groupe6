<?php

include_once("libs/maLibSQL.pdo.php");
include_once("libs/maLibUtils.php");

function logUser($login,$password)
{
    if($password==SQLGetChamp("SELECT passe FROM users WHERE pseudo='" . proteger($login) . "'")){
	    $idUser=SQLGetChamp("SELECT id FROM users WHERE pseudo='" . proteger($login) . "'");

        //générer un nouveau hash
        $newHash="dezdfgfgvtzyetubrjyfut";

        //le mettre dans la BDD
	    SQLUpdate("UPDATE users SET hash=$newHash WHERE id=$idUser");
        
        //le communiquer au client
		return $newHash; //TODO : il faudrait penser à refresh la date d'expiration lors de la réaliastion d'opération
	}
	return false;
}

?>