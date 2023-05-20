let color1 = document.getElementById("color1");
let colorName1 = document.querySelector("#colorName1 p");
let fileField = document.getElementById('vetement_form_image');
let nameColorField = document.getElementById('vetement_form_nameColor');

console.log(color1);

function hsl (color) {
    var rgb = color.slice(color.indexOf("(") + 1, color.indexOf(")")).split(", ");
    console.log(rgb);
    // Transformer r, g, et b en fractions de 1
    r = rgb[0] / 255;
    g = rgb[1] / 255;
    b = rgb[2] / 255;
    var hslCode = [];
    
    // Déterminer le canal le plus grand et le plus petit
    let cmin = Math.min(r,g,b),
        cmax = Math.max(r,g,b),
        delta = cmax - cmin,
        h = 0,
        s = 0,
        l = 0;

    // Calcule de la teinte
    // Pas de différence
    if (delta == 0)
    h = 0;
    // R est dominant
    else if (cmax == r)
    h = ((g - b) / delta) % 6;
    // G est dominant
    else if (cmax == g)
    h = (b - r) / delta + 2;
    // B est dominant
    else
    h = (r - g) / delta + 4;

    h = Math.round(h * 60);
    
    // Convertir les teintes négative en positive au-delà de 360°
    if (h < 0)
        h += 360;
    
    // Calcul de la luminosité
    l = (cmax + cmin) / 2;

    // Calcul de la saturation
    s = delta == 0 ? 0 : delta / (1 - Math.abs(2 * l - 1));
        
    // Multiplication de L et S par 100
    s = +(s * 100).toFixed(1);
    l = +(l * 100).toFixed(1);

    hslCode.push(Math.floor(h));
    hslCode.push(Math.floor(s));
    hslCode.push(Math.floor(l));

    // return "hsl(" + h + "," + s + "%," + l + "%)";
    return hslCode;
}

function colorNameTrigger(){
    var hsl1 = "";
    setTimeout(() => {
        console.log("Delayed for 0.5 second.");
        /* color1 = document.getElementById("color1"); */
        console.log(color1);
        let rgbColor1 = color1.style.backgroundColor;
        console.log(color1.style.backgroundColor);
        hsl1 = hsl(rgbColor1);
        console.log(hsl1);
        fetch('/hsl/' + hsl1[0] + '/' + hsl1[1] + '/' + hsl1[2])
            .then(function (header) {
                return header.json();
            })
            .then(function (body) {
                console.log(colorName1);
                colorName1.textContent = body.colorName;
                nameColorField.value = body.colorName;
        });
      }, 500);
}

depose.addEventListener("drop", colorNameTrigger);
fileField.addEventListener('change', colorNameTrigger);