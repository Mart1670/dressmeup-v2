let choisbtn = document.querySelector('choissir');    //button choisir fichier
let canvasWidth = 600;
let canvasHeight = 400;
let file = 'file';
const canvas = document.getElementById("canvas");
console.log(canvas);
let ctx;

function declancheur2(event) {
  file.addEventListener('mouseup', 'file');
  
}


if (canvas) {
  canvas.width = canvasWidth;
  canvas.height = canvasHeight;
  ctx = canvas.getContext("2d");
}
const depose = document.getElementById("canvas");

if (depose) {

  /* Gestion du DRAG AND DROP */
  depose.addEventListener("dragover", function (event) {
    /* Pour autoriser le drop par JS */
    event.preventDefault();
  });

/*  Passe en surbrillance
  depose.addEventListener("dragenter", function () {

    this.className = "onDropZone";
  });

   La surbrillance s'efface
  depose.addEventListener("dragleave", function () {

    this.className = "";
  });*/

  /* Tranfert de la liste des fichiers du drag and drop dans input file */
  depose.addEventListener("drop", function (event) {

    event.preventDefault();
    document.getElementById("file").files = event.dataTransfer.files;
    this.className = ""; /* Surbrillance supprimée */
    preview(event.dataTransfer);
  });
}

document.getElementById("file").addEventListener("change", function () {
  preview(document.getElementById("file"));
});

var _URL = window.URL || window.webkitURL;

/* Bloc d'affichage de la liste des fichiers */
function preview(event) {
  let divcanvas = document.getElementById("divcanvas");
  let p = document.getElementById("preview");

  /* Effacer le contenu initial de #preview */
  if (p)
    p.innerHTML = ""; 

  let f = event.files[0];

  let image = new Image();
  image.addEventListener('load', function () {
    let ratio = image.width / image.height;
    canvasHeight = canvasWidth / ratio;
    canvas.height = canvasHeight;
    ctx.drawImage(image, 0, 0, image.width, image.height, 0, 0, canvasWidth, canvasHeight);
  }, false);

  image.src = window.URL.createObjectURL(f);

}

choisbtn.addEventListener('click', declancheur2);
