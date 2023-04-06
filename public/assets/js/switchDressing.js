//FICHIER JS: SWITCH VÊTEMENT HAUT ET BAS SUR LA PAGE DRESSING:

//ASSURE LE BON DÉROULEMENT DU SCRIPT 
window.addEventListener('DOMContentLoaded', () => {

    toggleBtn = document.querySelector('.toggle-switch');
    ul = document.getElementById('styleVetements');
    dressingContent = document.getElementById('dressingContent');
    imgSrc = document.querySelectorAll('#dressingContent img');
    // console.log(imgSrc);
    type = "Bas";

    //FONCTION SWITCH LES VÊTEMENTS HAUTS ET BAS AVEC RÉCUPÉRATION DES INFOS EN BASE DE DONNÉE + AFFICHAGES
    function switchDressingContent() {
        //console.log('ok');
        if (type == "Haut") {
            dressingContent.dataset['type'] = "Bas";
            type = "Bas";
        } else if (type == "Bas"){
            dressingContent.dataset['type'] = "Haut";
            type = "Haut";
        }

        loadDressingContent(type);
    }

    //DÉCLENCHEMENT DE LA FONCTION AU CLIQUE
    toggleBtn.addEventListener('click', switchDressingContent);
    
    //DECLENCHEMENT DE LA FONCTION AU PREMIER CHARGEMENT DE LA PAGE
    switchDressingContent();
});
