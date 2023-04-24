//FICHIER JS: SWITCH VÊTEMENT HAUT ET BAS SUR LA PAGE DRESSING:

//ASSURE LE BON DÉROULEMENT DU SCRIPT 
window.addEventListener('DOMContentLoaded', () => {

    toggleBtn = document.querySelectorAll('#type-selection label');
    ul = document.getElementById('type-vetements');
    dressingContent = document.getElementById('dressing-content');
    imgSrc = document.querySelectorAll('#dressing-content img');
    // console.log(imgSrc);
    type = "Haut";

    //FONCTION SWITCH LES VÊTEMENTS HAUTS ET BAS AVEC RÉCUPÉRATION DES INFOS EN BASE DE DONNÉE + AFFICHAGES
    function switchDressingContent(e) {
        // console.log(e);
        if(e.currentTarget != null){
            dressingContent.dataset['type'] = e.currentTarget.textContent;
            type = e.currentTarget.textContent;
        }
        // console.log(type);

        loadDressingContent(type, "Tout");
    }

    //DÉCLENCHEMENT DE LA FONCTION AU CLIQUE
    for(i = 0; i<toggleBtn.length; i++){
        toggleBtn[i].addEventListener('click', switchDressingContent);
    }
    
    //DECLENCHEMENT DE LA FONCTION AU PREMIER CHARGEMENT DE LA PAGE
    switchDressingContent(type);
});
