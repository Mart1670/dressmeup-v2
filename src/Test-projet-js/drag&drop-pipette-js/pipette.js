//PIPETTE !!

let couleurs = document.getElementById("couleurs");     //carré couleur 1
let couleurs2 = document.getElementById("couleurs2");   //carré couleur 2
let couleurs3 = document.getElementById("couleurs3");   //carré couleur 3
let toggleButton = document.querySelector('button');    //button pipette

let sizePipette = 30;

function pipette(event) {
    const imageData = ctx.getImageData(event.offsetX, event.offsetY, sizePipette, sizePipette);

    let RTot = 0;
    let GTot = 0;
    let BTot = 0;
    for(let i = 0; i < imageData.data.length; i+=4) {
        RTot += parseInt(imageData.data[i]);
        GTot += parseInt(imageData.data[i+1]);
        BTot += parseInt(imageData.data[i+2]);
    }
    
    let r = Math.floor(RTot / (sizePipette*sizePipette));
    let g = Math.floor(GTot / (sizePipette*sizePipette));
    let b = Math.floor(BTot / (sizePipette*sizePipette));

    let rgba = new Array();
    
    rgba[0] = r.toString(16);
    rgba[1] = g.toString(16);
    rgba[2] = b.toString(16);
    rgba[3] = 'FF';
    
    let hexa = '#';
    for (let i = 0; i < rgba.length; i++) {
        
        if (rgba[i].length == 1)
        rgba[i] = '0' + rgba[i];
        hexa += rgba[i];
    }
    
    couleurs.style.backgroundColor = hexa;
    couleurs.style.width = '100px'; 
    couleurs.style.height = '100px';
    
}

function declancheur(event) {
    canvas.addEventListener('mouseup', pipette);
    pipette(event);
    
    canvas.style.cursor = "crosshair";  //Changement du curseur
}

toggleButton.addEventListener('click', declancheur);
