<?php
// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php");
	die("");
}
?>

<h1>Mon profil</h1>

<div id="Mes coordonnées">
  <h2>
    Mes coordonnées
  </h2>
  <label for="nom"> Nom </label>
  <input id="nom" type="text" />

  <label for="prenom"> Prénom </label>
  <input id="prenom" type="text" />

  <label for="mail"> Mail </label>
  <input id="mail" type="text" />

  <label for="identifiant"> Nom </label>
  <input id="identifiant" type="text" />

  <label for="password"> Mot de passe </label>
  <input id="password" type="password" />
</div>

<div id="projet">

</div>

<input type="submit" value="Enregistrer les modifications">