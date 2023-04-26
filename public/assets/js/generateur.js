//FICHIER JS : GENERATEUR DE TENU ET SELECTION HUMEUR ET AMBIANCE:

//ASSURE UN BON FONCTIONEMENT DU CODE 
window.addEventListener('DOMContentLoaded', () => {

    //VARIABLES HUMEUR
    let dThumeur = document.querySelectorAll('#tagHumeur label');
    let oneTaghum = document.getElementById('oneTagHumeur');

    //VARIABLES AMBIANCE
    let dTambiance = document.querySelectorAll('#tagAmbiance label');
    let oneTamb = document.getElementById('oneTagAmbiance');
    let generatorBtn = document.getElementById('mixmatch');
    //console.log(generatorBtn);

    //FONCTION POUR SELECTIONER HUMEUR
    function selectHumeur(e) {
        oneTaghum.textContent = e.currentTarget.textContent;
        oneTaghum.dataset.index = e.currentTarget.dataset.index;
    }

    //DÉCLENCHEMENT DE LA FONCTION AU CLIC
    for (i = 0; i < dThumeur.length; i++) {
        dThumeur[i].addEventListener('click', selectHumeur);
    }

    //FONCTION POUR SELECTIONER AMBIANCE
    function selectAmbiance(e) {
        oneTamb.textContent = e.currentTarget.textContent;
        oneTamb.dataset.index = e.currentTarget.dataset.index;
    }

    //DÉCLENCHEMENT DE LA FONCTION AU CLIC
    for (i = 0; i < dTambiance.length; i++) {
        dTambiance[i].addEventListener('click', selectAmbiance);
    }
});