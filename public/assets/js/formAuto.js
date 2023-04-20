//FICHIER JS : REMPLISSAGE AUTO DU FORMULAIRE PHP EN CLIQUANT SUR LES RADIOS HTML

//ASSURE LE BON DÉROULEMENT DU SCRIPT
window.addEventListener('DOMContentLoaded', () => {

    //VARIABLE POUR TYPE/CATEGORIE
    let catBtn = document.querySelectorAll('.catBtn');
    let vFt = document.getElementById('vetement_form_type');

    //VARIABLE POUR STYLE
    let typeBtn = document.querySelectorAll('.typeBtn');
    let vFs = document.getElementById('vetement_form_style');

    //VARIABLE POUR AMBIANCE
    let ambBtn = document.querySelectorAll('.ambBtn');
    let vFa = document.querySelectorAll('#vetement_form_tagAmbiances input');
    //console.log(vFa);

    //VARIABLE POUR VÊTEMENT
    let typeVetements = document.getElementById('type-vetements');
    let tagVetement = document.getElementById("tag_vet");

    //VARIABLE POUR BOUTON ANNULER
    let btnCancel = document.getElementById('btnCancel');

    //RÉINITIALISATION DU FORMULAIRE
    vFt.value = "";
    vFs.value = "";
    for (i = 0; i < vFa.length; i++) {
        vFa[i].checked = false;
    }

    //DÉCLANCHEMENT DE LA FONCTION AU CLIC
    for (i = 0; i < ambBtn.length; i++) {
        ambBtn[i].addEventListener('click', fillAmbiance);
    }

    //REMPLISAGE TYPE/CATEGORIE
    function fillCat(e) {
        vFt.value = e.currentTarget.textContent;

        //ENVOIE ET RÉCUPÉRATION DES DONNÉES À LA BASE DE DONNÉES
        fetch('/style/' + vFt.value)
            .then(function (header) {
                return header.json();
            })
            .then(function (body) {
                console.log(body.typeVetements);
                console.log(typeVetements);
                typeVetements.innerHTML = "";

                for (i = 0; i < body.typeVetements.length; i++) {
                    typeVetements.innerHTML += `
                <input type="radio" class="button-tags" name="type" id="type-${body.typeVetements[i]}" autocomplete="off" list>
                <label class="button-tags typeBtn" for="type-${body.typeVetements[i]}">${body.typeVetements[i]}</label>
                `;
                }
                toggletStyle();
                vFs.value = "";
            })
    }

    //REMPLISAGE STYLE
    function fillStyle(e) {
        // console.log(e.currentTarget.textContent);
        vFs.value = e.currentTarget.textContent;
        tagVetement.textContent = vFs.value;
    }

    //REMPLISAGE AMBIANCE
    function fillAmbiance(e) {
        //console.log(e.currentTarget.dataset.index);
        //console.log(vFa[e.currentTarget.dataset.index]);
        for (i = 0; i < vFa.length; i++) {
            vFa[i].checked = false;
        }
        vFa[e.currentTarget.dataset.index].checked = true;
    }

    //FONCTION POUR RÉCUPÉRATION DES TAGS
    function toggletStyle() {
        typeBtn = document.querySelectorAll('.typeBtn');
        for (i = 0; i < typeBtn.length; i++) {
            typeBtn[i].addEventListener('click', fillStyle);
        }
    }

    //DÉCLANCHEMENT DE LA FONCTION AU CLIC
    for (i = 0; i < catBtn.length; i++) {
        catBtn[i].addEventListener('click', fillCat);
    }

    //DÉCLANCHEMENT DE LA FONCTION AU CLIC
    for (i = 0; i < ambBtn.length; i++) {
        ambBtn[i].addEventListener('click', fillAmbiance);
    }

    toggletStyle();

    //FONCTION POUR EFFACER LE FORMULAIRE PHP ET LA SÉLÉCTION JS
    function cancel() {
        let btnRadios = document.querySelectorAll('.btn-check');
        //CLEAR LE PHP DU FORMULAIRE
        vFt.value = "";
        vFs.value = "";
        for (i = 0; i < vFa.length; i++) {
            vFa[i].checked = false;
        }

        //VARIABLES
        let vetementColor1 = document.getElementById('vetement_form_color');
        let newColor = document.getElementById('vetement_form_newColor');
        let nameColor = document.getElementById('vetement_form_nameColor');
        let file = document.getElementById('vetement_form_image');
        vetementColor1.value = "";
        newColor.value = "";
        nameColor.value = "";
        file.value="";

        //CLEAR HTML/JS ET CANVAS DU FORMULAIRE
        for (i = 0; i < btnRadios.length; i++) {
            btnRadios[i].checked = false;
        }

        //RÉINITIALISATION DES CHAMPS 
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        tagVetement.textContent = "Type de vêtement";
        let nomCouleur1 = document.getElementById("colorName1");
        //let nomCouleur2 = document.getElementById("colorName2");
        nomCouleur1.innerHTML = `<p class="card-color card-data">Couleur 1</p><span id="color1" class="card-data"></span>`;
        //nomCouleur2.innerHTML = `Couleur 2<span id="color2" class="color-mark" style="background-color:#00FA9A"></span>`;
        divCanvas.classList.add('empty-add');
        //console.log('cancel ok');
    }
    //DÉCLANCHEMENT AU CLIC
    btnCancel.addEventListener('click', cancel);
});
