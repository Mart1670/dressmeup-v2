let color1 = document.getElementById("color1");
let colorName1 = document.querySelector("#colorName1 p");
let fileField = document.getElementById('vetement_form_image');
let nameColor = document.getElementById('vetement_form_nameColor');

console.log(color1);

function hsl (color) {
    var rgb = color.slice(color.indexOf("(") + 1, color.indexOf(")")).split(", ");
    console.log(rgb);
    // Make r, g, and b fractions of 1
    r = rgb[0] / 255;
    g = rgb[1] / 255;
    b = rgb[2] / 255;
    var hslCode = [];
    
    // Find greatest and smallest channel values
    let cmin = Math.min(r,g,b),
        cmax = Math.max(r,g,b),
        delta = cmax - cmin,
        h = 0,
        s = 0,
        l = 0;

    // Calculate hue
    // No difference
    if (delta == 0)
    h = 0;
    // Red is max
    else if (cmax == r)
    h = ((g - b) / delta) % 6;
    // Green is max
    else if (cmax == g)
    h = (b - r) / delta + 2;
    // Blue is max
    else
    h = (r - g) / delta + 4;

    h = Math.round(h * 60);
    
    // Make negative hues positive behind 360°
    if (h < 0)
        h += 360;
    
    // Calculate lightness
    l = (cmax + cmin) / 2;

    // Calculate saturation
    s = delta == 0 ? 0 : delta / (1 - Math.abs(2 * l - 1));
        
    // Multiply l and s by 100
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
                colorName1.textContent = body.colorName;
                nameColor1.value = body.colorname;
        });
      }, 500);
}

depose.addEventListener("drop", colorNameTrigger);
fileField.addEventListener('change', colorNameTrigger);