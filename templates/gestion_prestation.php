<?php
// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php");
	die("");
}
?>

<link rel="stylesheet" type="text/css" href="css/gestion_prestation.css"/>

<div class="Banniere">
    <div class="nom_projet"> Nom du projet</div>
    <img src="../ressources/images/write.png" alt="write icon" style="width:20px;height:20px;">
    <input type="button" value="Finaliser le projet">
</div>

<div class="Evenement">
    <div class="Banniere_evenement">
        <input type="button" value="x">
        <div class="nom_evenement"> Evenement n°1</div>
        <img src="../ressources/images/write.png" alt="write icon" style="width:20px;height:20px;">
    </div>
    <div class="Criteres">
        <div class="critere1"> Critère n°1</div>
        <select class="Choix_critere1">
            <option selected="selected"> Sélectionner critère</option>
            <option> Musique</option>
            <option> Spectacle</option>
            <option> Comédie</option>
        </select>

        <div class="critere2"> Critère n°2</div>
        <select class="Choix_critere2">
            <option selected="selected"> Sélectionner critère</option>
            <option> Musique</option>
            <option> Spectacle</option>
            <option> Comédie</option>
        </select>

        <div class="critere3"> Critère n°3</div>
        <select class="Choix_critere3">
            <option selected="selected"> Sélectionner critère</option>
            <option> Musique</option>
            <option> Spectacle</option>
            <option> Comédie</option>
        </select>

        <div class="critere3"> Critère n°3</div>
        <select class="Choix_critere3">
            <option selected="selected"> Sélectionner critère</option>
            <option> Musique</option>
            <option> Spectacle</option>
            <option> Comédie</option>
        </select>

        <div class="critere4"> Critère n°4</div>
        <select class="Choix_critere4">
            <option selected="selected"> Sélectionner critère</option>
            <option> Musique</option>
            <option> Spectacle</option>
            <option> Comédie</option>
        </select>

        <div class="critere5"> Critère n°5</div>
        <select class="Choix_critere5">
            <option selected="selected"> Sélectionner critère</option>
            <option> Musique</option>
            <option> Spectacle</option>
            <option> Comédie</option>
        </select>
    </div>

    <div class="calendrier">
        Calendrier à mettre
    </div>

    <div class="Choix_prestataire">
        <img src="../ressources/images/Bob.jpg" alt="Bob le prestataire" >
        <div class="Nom_prestataire"> Nom du prestataire</div>
        <div class="Description_prestation"> Description de la prestation préselectionnée</div>
        <input type="button" value="Modifier la sélection">
    </div>

    <div class="adresse">
        <div class="lieu"> Lieu : </div>
        <img src="../ressources/images/write.png" alt="write icon" style="width:20px;height:20px;">
        <div class="num_rue"> N° de rue : 14</div>
        <div class="rue"> Rue : Avenue Paul Langevin</div>
        <div class="ville"> Ville : Villeneuve-d'Ascq</div>
        <div class="code_postal"> Code postal : 59650</div>
    </div>


    <input class="BtnAjoutEvenement" type="button" value="Ajouter un événement">

</div>

