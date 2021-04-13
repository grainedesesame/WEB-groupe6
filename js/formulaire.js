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