<?php
// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php");
	die("");
}
?>

<link rel="stylesheet" type="text/css" href="css/form.css"/>
<link rel="stylesheet" type="text/css" href="css/connexion.css"/>

<script src="js/lib_templates.js"></script>


<div id="page">
  <h1> Connexion </h1>
    <form>
        <input id="retour" type="button" value="Retour à l'accueil" onclick="rdAccueil();"/>
        <label for="identifiant"> Identifiant</label>
      <input id="identifiant" type="text" />

      <label for="password"> Mot de passe </label>
      <input type="password" id="password" name="pwd">

        <input type="submit" id="connexion" value="Se connecter"/></br>
        <div id="blocForm">
            <input type="button" id="formulaire" value="Créer un compte" onclick="rdFormulaire();"/>
        </div>
    </form>
</div>

