//FICHIER JS: PIPETTE + AFFICHAGE DES RÉSULTAS DES COULEURS

//ASSURE LE BON DÉROULEMENT DU SCRIPT
window.addEventListener('DOMContentLoaded', () => {

    //VARIABLES:

    //CARRÉ DE COULEUR
    let couleur = document.getElementById("color1");
    //BOUTTON PIPETTE
    let toggleButton = document.getElementById('BtnPipette');
    //RÉCUPÉRATION DES li 
    let colorBtn = document.querySelectorAll('.colorName');
    //RÉCUPÉRATION DU NOM DE LA COULEUR
    let nomCouleur = document.getElementById("colorName1");
    //RÉCUPÉRATION DU CODE HEXA
    let vetementColor1 = document.getElementById('vetement_form_color');
    //
    let newColor = document.getElementById('vetement_form_newColor');
    //
    let nameColor = document.getElementById('vetement_form_nameColor');

    //TAILLE DU SÉLÉCTEUR PIPETTE
    let sizePipette = 10;

    //FONCTION PIPETTE 
    function pipette(event) {
        const imageData = ctx.getImageData(event.offsetX, event.offsetY, sizePipette, sizePipette);

        //RÉCUPERATION RGB
        //INITIALISATION DES VARIABLE RGB À ZÉRO
        let RTot = 0;
        let GTot = 0;
        let BTot = 0;

        //BOUCLE DE RÉCUPÉRATION DES DONNÉES RGB DE CHAQUE PX 
        for (let i = 0; i < imageData.data.length; i += 4) {
            RTot += parseInt(imageData.data[i]);
            GTot += parseInt(imageData.data[i + 1]);
            BTot += parseInt(imageData.data[i + 2]);
        }

        //MOYENNE DES DONNÉES RÉCUPÉRÉ
        let r = Math.floor(RTot / (sizePipette * sizePipette));
        let g = Math.floor(GTot / (sizePipette * sizePipette));
        let b = Math.floor(BTot / (sizePipette * sizePipette));

        //TABLEAU POUR RANGER LES RGB
        let rgba = new Array();

        //CONVERSTION EN HEXADÉCIMAL 
        rgba[0] = r.toString(16);
        rgba[1] = g.toString(16);
        rgba[2] = b.toString(16);

        let hexa = "";
        for (let i = 0; i < rgba.length; i++) {

            if (rgba[i].length == 1)
                rgba[i] = '0' + rgba[i];
            hexa += rgba[i];
        }

        let hexa1 = hexa;
        hexa = "#" + hexa;
        couleur.style.backgroundColor = hexa;

        //RÉCUPÉRATION DES NOMS DES COULEURS DANS LA BASE DE DONNÉES POUR AFFICHAGE
        fetch('/testcolorname/' + hexa1)
            .then(function (header) {
                return header.json();
            })
            .then(function (body) {
                nomCouleur.innerHTML = `
                ${body.colorname}<span
                id="color1"
                class="color-mark" style="background-color:${hexa}"></span>
                `
                nameColor.value = body.colorname;
                vetementColor1.value = hexa;
                //console.log(body.colorname);
            })
        newColor.value = hexa;
    }

    //DÉCLENCHEMENT QUAND LA SOURIS PASSE AU-DESSUS DU CANVAS 
    function declencheur() {
        canvas.addEventListener('mouseup', pipette);

        //CHANGEMENT DE LA FORME DU CURSEUR
        canvas.style.cursor = "crosshair";
    }

    //FONCTION POUR SWITCH LA COULEUR
    function switchColorPicker(e) {
        nomCouleur = e.currentTarget;
        //console.log(nomCouleur);
        couleur = nomCouleur.childNodes[1];
        //console.log(couleur);
        nomCouleur.style.cursor = "pointer";
        nomCouleur.style.opacity = 1;
    }

    //APPELE DE LA FONCTION DÉCLENCHEUR
    toggleButton.addEventListener('click', declencheur);

    //DÉCLENCHEMENT DE LA FONCTION AU CLIQUE
    for (i = 0; i < colorBtn.length; i++) {
        colorBtn[i].addEventListener('click', switchColorPicker);
        // console.log(colorBtn[i]);
    }
});
