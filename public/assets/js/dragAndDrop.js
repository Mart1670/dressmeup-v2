//FICHIER JS: DRAG&DROP PHOTO UTILISATEUR AVEC CANVAS

//VARIABLES POUR DIMENTION DU CANVAS
let canvasWidth = 300;
let canvasHeight = 500;
let file = 'file';

//CANVAS
const canvas = document.getElementById("canvas");
var ctx;
var divCanvas = document.getElementById("pic-area");

if (canvas) {
  canvas.width = canvasWidth;
  canvas.height = canvasHeight;
  ctx = canvas.getContext("2d");
}

const depose = document.getElementById("canvas");

//GESTION DU DRAG AND DROP
if (depose) {
  depose.addEventListener("dragover", function (event) {
    //AUTORISE LE JS POUR EFFECTUER LE DRAG & DROP
    event.preventDefault();
  });

  //TRANSFERT DE LA LISTE DES FICHIERS DU DRAG & DROP DANS L'INPUT FILE
  depose.addEventListener("drop", function (event) {
    event.preventDefault();
    document.getElementById("vetement_form_image").files = event.dataTransfer.files;
    this.className = "";
    preview(event.dataTransfer);
  });
}

document.getElementById("vetement_form_image").addEventListener("change", function () {
  preview(document.getElementById("vetement_form_image"));
});

var _URL = window.URL || window.webkitURL;

// FONCTION DU BLOC D'AFFICHAGE DE LA LISTE DES FICHIERS 
function preview(event) {

  divCanvas.classList.remove('empty-add');
  let p = document.getElementById("preview");

  // EFFACER LE CONTENU INITIAL DE PREVIEW 
  if (p)
    p.innerHTML = "";

  let f = event.files[0];
  let image = new Image();
  image.addEventListener('load', function () {
    let ratio = image.width / image.height;
    canvasHeight = canvasWidth / ratio;
    canvas.height = canvasHeight;
    ctx.drawImage(image, 0, 0, image.width, image.height, 0, 0, canvasWidth, canvasHeight);
    analyze(ctx);
    
  }, false);
  image.src = window.URL.createObjectURL(f);
}

// Ouvrir la sélection du fichier au clic
divCanvas.addEventListener("click", function(){
  console.log(document.getElementById('BtnPipette').dataset['active']);
  console.log(typeof(document.getElementById('BtnPipette').dataset['active']));
  if(document.getElementById('BtnPipette').dataset['active'] == "false"){
    document.getElementById("vetement_form_image").showPicker();
  }
})
