var nameColorField1 = document.getElementById('vetement_form_nameColor');
var colorName1 = document.querySelector("#colorName1 p");

function hsl (color) {
    // Conversion hex en RGB
    let rgb = [];
    let r = 0, g = 0, b = 0;
    if (color.length == 4) {
        r = "0x" + color[1] + color[1];
        g = "0x" + color[2] + color[2];
        b = "0x" + color[3] + color[3];
    } else if (color.length == 7) {
        r = "0x" + color[1] + color[2];
        g = "0x" + color[3] + color[4];
        b = "0x" + color[5] + color[6];
    }
    // Transformer r, g, et b en fractions de 1
    r /= 255;
    g /= 255;
    b /= 255;
    console.log(rgb);
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

function colorNameTrigger(color){
    var hsl1 = "";
    hsl1 = hsl(color);
    console.log(hsl1);
    fetch('/hsl/' + hsl1[0] + '/' + hsl1[1] + '/' + hsl1[2])
        .then(function (header) {
            return header.json();
        })
        .then(function (body) {
            console.log(colorName1);
            colorName1.textContent = body.colorName;
            nameColorField1.value = body.colorName;
    });
}