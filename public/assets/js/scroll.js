//FICHIER JS: SCROLL POUR QUE LE LOGO S'AFFICHE DANS LA NAVBAR ET QUE SI ON CLIC DESSU ON REMONTE TOUT EN HAUT DE LA PAGE

//ASSURE LE BON DÉROULEMENT DU SCRIPT
document.addEventListener('DOMContentLoaded', (e) => {

    //DÉCLENCHEMENT DE LA FONCTION AU PREMIER CHARGEMENT DE LA PAGE
    checkScroll();

    //FONCTION ADAPTER LE LOGO DANS LA NAVBAR A UN CERTAIN MOMENT DU SCROLL 
    function checkScroll() {
        let navbar = document.getElementById('navbar');
        if (document.body.scrollTop >= 90 || document.documentElement.scrollTop >= 90) {
            navbar.classList.add('on-top');
        } else {
            navbar.classList.remove('on-top');
        }
    }

    //DÉCLENCHEMENT QUAND UN SCROLL SUR LE SITE 
    document.addEventListener('scroll', (e) => {
        checkScroll();
    });
});