<?php

?>
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'inscription</title>
</head>
<script src="../jquery-3.6.0.min.js">
</script>

<script>
    
</script>
<style>
    /*Mise en page générale*/
    body{
        margin: auto;
        max-width: 1000px;
        text-align: center;

    }
    h1{
        text-align: center;
        margin:50px;
    }
    #page{
        margin-top:30px;
        padding:30px;
        border-style: solid;
        border-color:lightgray;
        border-width: 1px;
        position: absolute;
        left:10%;
        right:10%;
        box-shadow: 2px 2px 5px ;
        color: darkslategrey;
        max-width: 1000px;
    }
     input {
         margin:5px;
     }

    /*Affichage par blocs*/
    .champCommun{
        display: block;
    }
    .champClient{
        display:none;
    }
    .champPrestataire{
        display: none;
    }
    label{
        display:inline-block;
        width: 320px;
        text-align: left;

    }
    input{
        display: inline-block;
        width:350px;
    }
    select{
        width: 360px;
        margin-right:10px;
        margin-left:10px;
        vertical-align: top;
    }

    .champ{
        display: inline-block;
        border-style: solid;
        border-color:lightgray;
        border-width: 1px;
        width:370px;
        height:100px;
        border-radius:5px;
    }
    #envoyer{
        display: inline-block;
        width:100px;
        margin-top:70px;
        horiz-align: right;
    }

    input[type=submit], #retour {
        background-color: dimgrey;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover, #retour:hover {
        background-color: black;
    }
    #retour{
        width:150px;
        position: absolute;
        left : 50px;
        top : 70px;
    }
</style>

<script>

    $(document).ready(function(){
        $(".champClient").hide();
        $(".champPrestataire").hide();
    });

    function select(value){
        if (value=="Prestataire"){
            $(".champPrestataire").show();
            $(".champClient").hide();
        }
        else if (value=="Client"){
            $(".champClient").show();
            $(".champPrestataire").hide();
        }
        else{
           $(".champClient").hide();
           $(".champPrestataire").hide();
        }
    }

    function select2(value){
        if (value=="Particulier"){
            console.log("particulier");
            $("#particulier").show();
            $("#entreprise").hide();
        }
        else if (value=="Entreprise/Association") {
            console.log("entreprise");
            $("#particulier").hide();
            $("#entreprise").show();
        }
        else {
            $("#particulier").hide();
            $("#entreprise").hide();
        }
    }

    function retourAccueil(){
        $(location).attr('href', "../accueil/accueil.html");
    }

</script>

<body>
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
</body>