var ouvrirpopup = document.querySelector('.ouvrirpopupauthentification');
var authentification = document.getElementById('popup_authentification');
var fermeture = document.querySelector('.fermeture_popup');

var barre_recherche = document.querySelector('.recherche');
var barre_recherche_contenu = document.querySelector('.barre_recherche');
var fermeture_barre_recherche = document.querySelector('.fermeture_barre_recherche');

var sous_contenu_liens = document.querySelectorAll('.lien_contenu_sous');
var bouton_reduire = document.querySelector('.bouton_reduit');
var estOuvert = true;

bouton_reduire.addEventListener('click', function() {
    estOuvert = !estOuvert; // Inverse l'état

    
    sous_contenu_liens.forEach(function(element) {
        if (estOuvert) {
            element.classList.add('visible');
        } else {
            element.classList.remove('visible');
        }
    });

    // Met à jour le texte du bouton en fonction de l'état
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
    
    console.log(dataID);


    sous_contenu_liens.forEach(function(sous_contenu_lien) {
        var dataId = sous_contenu_lien.getAttribute('data-id');
        
        if (dataID == dataId) {
            if (sous_contenu_lien.classList.contains('visible')) {
                sous_contenu_lien.classList.remove('visible');
            } else {
                sous_contenu_lien.classList.add('visible');
            }
        }
    });
    
}
