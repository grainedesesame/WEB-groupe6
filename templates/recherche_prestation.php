<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recherche de prestations</title>

    <style>


        body{
            font-family: Verdana, sans-serif;
            margin: auto;
            max-width: 1000px;
            text-align: center;
        }

        .Evenement{
            position: relative;
            margin: 3px;
            border : 3px solid #555555;
            top: 10px;
            height: 250px;
            height: 250px;
        }

        .Evenement *{
            position : absolute;
            margin: 1px;
        }

        .Banniere_evenement{
            position: relative;
            /*border: 2px solid red; */
            top: 0px;
            height: 22px;
            margin : 5px;
        }

        .Banniere_evenement > input{
            left: 2px;
            background-color: white;
            color: black;
            border: 2px solid #555555;
        }

        .Banniere_evenement > input:hover{
            background-color: #555555;
            color: white;
        }

        #nom_evenement{
            left: 10px;
        }

        .Banniere_evenement > img{
            left: 160px;
        }

        .Criteres{
            /*border: 2px solid blue;*/
            width: 750px;
            height: 80px;
            margin : 10px;
        }

        #critere1 {
            left : 31px;
            top: 5px;
        }

        #Choix_critere1 {
            left: 2px;
            top  :30px;
            background-color: white;
            color: black;
            border: 2px solid #555555;
        }

        #critere2 {
            left : 181px;
            top: 5px;
        }

        #Choix_critere2 {
            left: 152px;
            top  :30px;
            background-color: white;
            color: black;
            border: 2px solid #555555;
        }

        #critere3 {
            left : 331px;
            top: 5px;
        }

        #Choix_critere3 {
            left: 302px;
            top  :30px;
            background-color: white;
            color: black;
            border: 2px solid #555555;
        }

        #critere4 {
            left : 481px;
            top: 5px;
        }

        #Choix_critere4 {
            left: 452px;
            top  :30px;
            background-color: white;
            color: black;
            border: 2px solid #555555;
        }

        #critere5 {
            left : 631px;
            top: 5px;
        }

        #Choix_critere5 {
            left: 602px;
            top  :30px;
            background-color: white;
            color: black;
            border: 2px solid #555555;
        }

        /* Calendrier à faire */

        .calendrier{
            position:absolute;
            border: 2px solid green;
            height: 150px;
            width:200px;
            right: 0px;
            margin: 5px;
        }

        .Choix_prestataire {
            position: relative;
            /*border: 2px solid orange;*/
            top: 70px;
            width: 400px;
            height: 140px;
            margin: 5px;
        }

        .Choix_prestataire > img {
            position: absolute;
            left: 5px;
            border: 2px solid;
            max-width:100px;
            max-height:100px;
        }

        #Nom_prestataire{
            position: absolute;
            right:60px;
            top: 5px;
        }

        #Description_prestation{
            position: absolute;
            text-align:left;
            font-size: smaller;
            max-width:260px;
            right:5px;
            top: 30px;
        }

        .adresse{
            position: absolute;
            /*border: 2px solid yellow;*/
            top: 100px;
            left: 420px;
            width: 300px;
            height: 140px;
            margin: 5px;
        }

        #lieu{
            position: absolute;
            top: 2px;
        }

        .adresse > img{
            position: absolute;
            top: 2px;
            left: 50px;
        }

        #num_rue{
            position: absolute;
            top: 22px;
        }

        #rue{
            position: absolute;
            top: 42px;
        }

        #ville{
            position: absolute;
            top: 62px;
        }

        #code_postal{
            position: absolute;
            top: 82px;
        }

        .prestation_selectionnee{
            position: relative;
            margin: 3px;
            border : 3px solid #555555;
            top: 30px;
            height: 150px;
        }

        .description_prestation{
            position: absolute;
            /*border: 2px solid purple;*/
            top: 5px;
            left: 5px;
            height: 140px;
            width: 400px;
        }

        .description_prestation > img {
            position: absolute;
            left: 5px;
            top: 30px;
            border: 2px solid;
            max-width:100px;
            max-height:100px;

        }

        .nom_prestation{
            position: absolute;
            left: 5px;
        }

        .descri_prestation{
            position: absolute;
            text-align:left;
            left: 120px;
            top: 40px;
        }

        .cout_prestation{
            position: absolute;
            left: 120px;
            top:100px;
        }

        .BtnChoisirPrestation{
            position:absolute;
            bottom: 0px;
            right: 50px;
            background-color: white;
            color: black;
            border: 2px solid #555555;
        }

        .BtnRetourPrestation{
            position:absolute;
            bottom: 0px;
            right: 0px;
            background-color: white;
            color: black;
            border: 2px solid #555555;
        }

        .BtnChoisirPrestation:hover{
            background-color: #555555;
            color: white;
        }

        .BtnRetourPrestation:hover{
            background-color: #555555;
            color: white;
        }

        .images_selectionnees{
            position: absolute;
            /*border: 2px solid brown;*/
            left: 450px;
            width: 500px;
            height: 140px;
        }

        .images_selectionnees > img{
            position: absolute;
            top: 30px;
            border: 2px solid;
            max-width:100px;
            max-height:100px;

        }

        .images_selectionnees > img:first-child{
           left: 5px;
        }

        .images_selectionnees > img:nth-child(2){
            left: 115px;
        }

        .images_selectionnees > img:nth-child(3){
            left: 225px;
        }

        .images_selectionnees > img:nth-child(4){
            left: 335px;
        }












    </style>

</head>


<body>

<div class="Evenement">
    <div class="Banniere_evenement">
        <div id="nom_evenement"> Projet : Nom du projet</div>
    </div>
    <div class="Criteres">
        <div id="critere1"> Critère n°1</div>
        <select id="Choix_critere1">
            <option selected="selected"> Sélectionner critère</option>
            <option> Musique</option>
            <option> Spectacle</option>
            <option> Comédie</option>
        </select>

        <div id="critere2"> Critère n°2</div>
        <select id="Choix_critere2">
            <option selected="selected"> Sélectionner critère</option>
            <option> Musique</option>
            <option> Spectacle</option>
            <option> Comédie</option>
        </select>

        <div id="critere3"> Critère n°3</div>
        <select id="Choix_critere3">
            <option selected="selected"> Sélectionner critère</option>
            <option> Musique</option>
            <option> Spectacle</option>
            <option> Comédie</option>
        </select>

        <div id="critere3"> Critère n°3</div>
        <select id="Choix_critere3">
            <option selected="selected"> Sélectionner critère</option>
            <option> Musique</option>
            <option> Spectacle</option>
            <option> Comédie</option>
        </select>

        <div id="critere4"> Critère n°4</div>
        <select id="Choix_critere4">
            <option selected="selected"> Sélectionner critère</option>
            <option> Musique</option>
            <option> Spectacle</option>
            <option> Comédie</option>
        </select>

        <div id="critere5"> Critère n°5</div>
        <select id="Choix_critere5">
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
        <img src="images/Bob.jpg" alt="Bob le prestataire" >
        <div id="Nom_prestataire"> Nom du prestataire</div>
        <div id="Description_prestation"> Description de la prestation préselectionnée</div>
    </div>

    <div class="adresse">
        <div id="lieu"> Lieu : </div>
        <img src="images/write.png" alt="write icon" style="width:20px;height:20px;">
        <div id="num_rue"> N° de rue : 14</div>
        <div id="rue"> Rue : Avenue Paul Langevin</div>
        <div id="ville"> Ville : Villeneuve-d'Ascq</div>
        <div id="code_postal"> Code postal : 59650</div>
    </div>

</div>

<div class="prestation_selectionnee">
    <div class="description_prestation">
        <div class="nom_prestation"> Nom de la prestation [ nom du prestataire ]</div>
        <img src="images/Bob.jpg" alt="Bob le prestataire" >
        <div class="descri_prestation"> Description de la prestation préselectionnée</div>
        <div class="cout_prestation"> Coût : 500€ </div>
        <input class="BtnChoisirPrestation" type="button" value="Choisir">
        <input class="BtnRetourPrestation" type="button" value="<<">

    </div>

    <div class="images_selectionnees">
        <img src="images/Bob.jpg" alt="Bob le prestataire" >
        <img src="images/Bob.jpg" alt="Bob le prestataire" >
        <img src="images/Bob.jpg" alt="Bob le prestataire" >
        <img src="images/Bob.jpg" alt="Bob le prestataire" >
    </div>
</div>


</body>

</html>

