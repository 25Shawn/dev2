var ouvrirpopup = document.querySelector('.ouvrirpopupauthentification');
var authentification = document.getElementById('popup_authentification');
var fermeture = document.querySelector('.fermeture_popup');

ouvrirpopup.addEventListener('click', function() {
    authentification.style.display = 'block';
    fermeture.style.display = 'block';
});

fermeture.addEventListener('click', function(){
    authentification.style.display = 'none';
    fermeture.style.display = 'none';
});

