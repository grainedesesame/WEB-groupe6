/* librairie destinées aux pages de template */


/* Redirections */
function rdFormulaire(){
    $(location).attr('href', "?view=formulaire");
}
function rdAccueil(){
    $(location).attr('href', "?view=accueil");
}

function toControleur(data, success){
	$.ajax({
		type: "POST",
		url: "controleur.php",
		//headers: {"debug-data":true},
		data: data,
		success: success,
	    dataType: "json"
	});
}

/* EXEMPLES REQUETES AJAX 


function authenticate(cbNext) {
	$.ajax({
		type: "POST",
		url: apiRoot + "/authenticate",
		//headers: {"debug-data":true},
		data: {"user":"tom","password":"web"},
		success: function(oRep){
		console.log(oRep); 
		hash = oRep.hash; 
		cbNext(); 
	},
	dataType: "json"
	});
} 

function getArticles(){
	$.ajax({
		type: "GET",
		url: apiRoot + "/articles",
		//headers: {"hash":hash,"debug-data":true},
		headers: {"hash":hash},
		success: function(oRep){
			console.log(oRep);
			//var idFirst = oRep.articles[0].id;
            oRep.articles.forEach(article => {
            $("#banniere>select").append(
				//'<option value="'+article.id+'">'+article.titre+'</option>'
				$("<option>")
					.html(article.titre)
					.data(article)
			);
            });
            console.log($("#banniere>select option:selected").data().id);
            getParagraphes(oRep.articles[0].id);
		},
		dataType: "json"
	});
}

function getParagraphes(id){
	$.ajax({
		type: "GET",
		url: apiRoot + "/articles/"+id+"/paragraphes",
		//headers: {"hash":hash,"debug-data":true},
		headers: {"hash":hash},
		success: function(oRep){
			console.log(oRep);
			//var idFirst = oRep.articles[0].id;
			$("#contenu").empty();
            oRep.paragraphes.forEach(paragraphe => {
            $("#contenu").append($("<p>").data(paragraphe).html(paragraphe.contenu).click(paragrapheClick));
            });
            
		},
		dataType: "json"
	});
}

function putParagraphe(articleID,paragrapheID,contenu){
	// NB : l'envoi de données par la méthode PUT
	// ne fonctionne pas avec la propriété .data()
	// il faut envoyer les données en QS après l'URL
	$.ajax({
		type: "PUT",
		url: apiRoot + "/articles/" + articleID + "/paragraphes/" + paragrapheID + "?contenu=" + contenu,		
		//headers: {"hash":hash,"debug-data":true},
		headers: {"hash":hash},
		success: function(oRep){
		console.log(oRep);			
	},
	dataType: "json"
	});
} */