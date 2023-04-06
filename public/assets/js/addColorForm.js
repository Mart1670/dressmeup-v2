//FICHIER JS : AJOUT DE COULEUR

//ASSURE LE BON DÉROULEMENT DU SCRIPT
window.addEventListener('DOMContentLoaded', () => {

    //VARIABLES
    let color1Btn = document.getElementById('colorName1');
    let color2Btn = document.getElementById('colorName2');

    //DÉCLENCHEMENT DE LA FONCTION AU CLICQUE DANS PIPETTE.JS
    color1Btn.addEventListener('click', switchColorPicker);
    color2Btn.addEventListener('click', switchColorPicker);
});