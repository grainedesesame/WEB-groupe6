<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/profil.css"/>
  <title>Profil </title>
</head>
<body>

<div id="remplissage" class="intercalaire">
    <div id="coord" class="marquepage" onclick="afficherProfil();">
        Mes coordonnées
    </div>
    <div id="proj" class="marquepage" onclick="afficherProjets();">
        Mes projets
    </div>
</div>

<h1>Mon profil</h1>

<div id="coordonnees" class="intercalaire">
  <h2>
    Mes coordonnées
  </h2>

  <label for="nom"> Nom </label>
  <input id="nom" type="text" /></br>

  <label for="prenom"> Prénom </label>
  <input id="prenom" type="text" /></br>

  <label for="mail"> Mail </label>
  <input id="mail" type="text" /></br>

  <label for="identifiant"> Identifiant </label>
  <input id="identifiant" type="text" /></br>

  <label for="password"> Mot de passe </label>
  <input id="password" type="password" />
</div>

<div id="projet" class="intercalaire">
  // ensemble des projets
</div>

<input type="submit" value="Enregistrer les modifications">
</body>
</html>