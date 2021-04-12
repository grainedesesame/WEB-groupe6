<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>

<script src="../js/jquery-3.6.0.min.js"></script>

<style>

    body{
        margin:auto;
    }

    .topnav {
        background-color: dimgrey;
        overflow: hidden;
    }


    .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }


    .topnav a.active {
        background-color: black;
        color: white;
    }

    #Connexion{float:right}
    #Inscription{float:right}



</style>


<body>

<div class="topnav">
    <a class="active" href="../accueil/accueil.html">Accueil</a>
    <a id = "Inscription" href="../formulaire/formulaire.html">Inscription</a>
    <a id = "Connexion" href="../templates/connexion.html" >Connexion</a>
</div>


</body>
