// Variables pour le popup authentification
var ouvrirpopup = document.querySelector('.ouvrirpopupauthentification');
var authentification = document.getElementById('popup_authentification');
var fermeture = document.querySelector('.fermeture_popup');

//Variables pour le popup barre de recherche
var barre_recherche = document.querySelector('.recherche');
var barre_recherche_contenu = document.querySelector('.barre_recherche');
var fermeture_barre_recherche = document.querySelector('.fermeture_barre_recherche');

//Variables pour le bouton qui réduit ou développe tout
var sous_contenu_liens = document.querySelectorAll('.lien_contenu_sous');
var bouton_reduire = document.querySelector('.bouton_reduit');
var estOuvert = true;

bouton_reduire.addEventListener('click', function() {
    estOuvert = !estOuvert;
    
    sous_contenu_liens.forEach(function(element) {
        
        if (estOuvert) {
            element.classList.add('visible');
            element.style.maxHeight = element.scrollHeight + 'px';
            
        } else {
            element.classList.remove('visible');
            element.style.maxHeight = '0';
        }
    });

    bouton_reduire.innerHTML = estOuvert ? 'Tout réduire' : 'Tout développer';
});


barre_recherche.addEventListener('click', function(){
    barre_recherche_contenu.style.display = 'block';
    fermeture_barre_recherche.style.display = 'block';
});

fermeture_barre_recherche.addEventListener('click', function(){
    
    barre_recherche_contenu.style.display = 'none';
    fermeture_barre_recherche.style.display = 'none';
});

ouvrirpopup.addEventListener('click', function() {
    authentification.style.display = 'block';
    fermeture.style.display = 'block';
});

fermeture.addEventListener('click', function(){
    authentification.style.display = 'none';
    fermeture.style.display = 'none';
});



function collapsed(dataID){

    sous_contenu_liens.forEach(function(sous_contenu_lien) {

        var dataId = sous_contenu_lien.getAttribute('data-id');
        
        if (dataID == dataId) {

            if (sous_contenu_lien.classList.contains('visible')) {

                sous_contenu_lien.classList.remove('visible');
                sous_contenu_lien.style.maxHeight = '10';
            } else {

                sous_contenu_lien.classList.add('visible');
                sous_contenu_lien.style.maxHeight = sous_contenu_lien.scrollHeight + 'px';
            }
        }
    });
    
}

//######################### Gestion d'erreur du formulaire d'authentification ###########################


var mot_de_passe = document.querySelector('.input_mot_de_passe');
var message_erreur = document.querySelector('.message_erreur');
var formulaire = document.getElementById('formulaire_login');
var usager = document.querySelector('.input_usager');

var valide = false;


if(formulaire != null){
    formulaire.addEventListener('submit', ValiderFormulaire);
}

if(mot_de_passe != null){
    mot_de_passe.addEventListener('input', ValiderMotDePasse);
}



if(usager != null){
    usager.addEventListener('input', ValiderUsager);
}


function ValiderUsager(){

    
    var valeur = usager.value;
    var message = '';

    if(valeur.length == 0){
        message += 'Code d\'usager ou mot de passe invalide.';
    }
    else{
        valide = true;
    }


    message_erreur.innerHTML = message;
    return valide;
}

function ValiderMotDePasse(){

    var valeur = mot_de_passe.value;
    var message = '';

    if(valeur.length == 0){
        message += 'Code d\'usager ou mot de passe invalide.'
    }
    else{
        valide = true;
    }

    message_erreur.innerHTML = message;
    message_erreur.style.display = 'block';
    return valide;      
}

function ValiderFormulaire(){
    
    var valeur = false;

    if(ValiderUsager && ValiderMotDePasse){
        valeur = true;
    }


    if(valeur){
        formulaire.onsubmit;
    }
}