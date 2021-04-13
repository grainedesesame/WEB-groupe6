
$(document).ready(function(){
    afficherProfil();
});

function afficherProfil(){
    $("#htmlremplissage").empty();
    var contenu =  jQuery('#coordonnees').html();
    console.log(contenu);
    $("#htmlremplissage").html(contenu);
    $("#coord").css({"background-color":"black", "color":"white"});
    $("#proj").css({"background-color":"white", "color":"black"});

}

function afficherProjets(){
    $("#htmlremplissage").empty();
    var contenu =  jQuery('#projets').html();
    $("#htmlremplissage").html(contenu);
    $("#proj").css({"background-color":"black", "color":"white"});
    $("#coord").css({"background-color":"white", "color":"black"});
}
/*
présentation des titres
présentation intercalaires
interaction : couleur des intercalaires
présentation : zindex
régler problème php
 */