function loginRequest(){

    //checker ici la validité du contenu (variable non vide etc ...)


    //si on est arrivé jusque là, on peut faire la requête de connexion
    toControleur({"action":"CONNEXION","login":"tom","password":"web"},treatLoginResponse);
}

function treatLoginResponse(response){

}