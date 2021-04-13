<?php
// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php");
	die("");
}
?>


<link rel="stylesheet" type="text/css" href="css/formulaire.css"/>
<script src="js/formulaire.js"></script>

<div id="page">
    <h1> Formulaire d'inscription </h1>

    <input id="retour" type="button" value="Retour à l'accueil" onclick="retourAccueil();"/>

    <div class="champCommun">
        <label for="service">Vous souhaitez vous inscrire en tant que </label>
        <select  name="service" id="service" onchange="select(this.value)">
            <option selected="selected"> Aucun choix sélectionné</option>
            <option> Prestataire </option>
            <option> Client </option>
        </select>
    </div>

    <div class="champClient">
        <label for="service">Vous êtes</label>

        <select  name="statut" id="statut" onchange="select2(this.value)">
            <option selected="selected"> Aucun choix sélectionné</option>
            <option > Particulier </option>
            <option> Entreprise/Association </option>
        </select>
    </div>

    <div class="champClient" id="particulier">
        <label for="nom"> Nom </label>
        <input id="nom" type="text" />
        <label for="prenom"> Prénom </label>
        <input id="prenom" type="text" />
    </div>

    <div class="champClient" id="entreprise">
        <label for="nomEntreprise"> Nom de l'entreprise/association</label>
        <input id="nomEntreprise" type="text" />
    </div>
    <div class="champPrestataire">
        <label for="nomScene"> Nom de scène </label>
        <input id="nomScene" type="text" />
        <div id="membres">
            <label for="nom1"> Nom du référent </label>
            <input id="nom1" type="text" />
            <label for="prenom1"> Prénom du référent </label>
            <input id="prenom1" type="text" />
        </div>
    </div>

    <div class="champCommun">
        <div id="coordonnees">
            <label for="voie"> N° et voie </label>
            <input id="voie" type="text"/>
            <label for="codePostal"> Code postal </label>
            <input id="codePostal" type="text" />
            <label for="ville"> Ville </label>
            <input id="ville" type="text" />
            <label for="tel"> Téléphone </label>
            <input id="tel" type="text" />
            <label for="mail"> Adresse électronique </label>
            <input id="mail" type="text" />
        </div>
        <div id="profil">
            <label for="pseudo"> Identifiant/pseudo </label>
            <input id="pseudo" type="text" />
            <label for="password">Mot de passe </label>
            <input type="password" id="password" name="pwd">
            <!-- Insérer une photo -->
        </div>
    </div>

    <div class="champPrestataire">
        <label for="domaines"> Domaines de compétence (mots clé)</label>
        <div id="domaines" class="champ" contenteditable="true">
        </div>
    </div>

    <div class="champClient">
         <label for="preferences" > Préférences (mots clé)</label>
        <div id="preferences" class="champ" contenteditable="true">
            test
        </div>
         <!--<input id="preferences" type="text" />-->
    </div>

    <input id="envoyer" type="submit"/>
</div>