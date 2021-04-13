// jQuery.extend(jQuery.validator.messages, {
//     required: "Champ requis !",
//     email: "Email non valide !",});


$(document).ready(function(){
    $(".champClient").hide();
    $(".champPrestataire").hide();
    $('input').not(':image, :button, :submit, :reset, :hidden, .notRequired').addClass('required');
    $("#page").validate({
        rules: {
            "mail": {
                "email": true,
                "maxlength": 255
            }},
        errorPlacement: function(error,element) {
            return true;
        },
        submitHandler: function (form) {
            // $.ajax({
            //     url: ,
            //     type: "POST",
            //     data: new FormData($(form)),
            //     cache: false,
            //     processData: false,
            //     success: function(data) {
            //         $('#loading').hide();
            //         $("#message").html(data);
            //     }
            // });
            return false;
        }
    });

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

function valider(){
    $( "input:not([type=submit]):blank" ).css( "background-color", "lightpink" );
}