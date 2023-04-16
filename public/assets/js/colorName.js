let color1 = document.getElementById("color1");
let colorName1 = document.getElementById("colorName1").childNodes;

console.log(color1);

function hsl (color) {
    var rgb = color.slice(color.indexOf("(") + 1, color.indexOf(")")).split(", ");
    console.log(rgb);
    // Make r, g, and b fractions of 1
    r = rgb[0] / 255;
    g = rgb[1] / 255;
    b = rgb[2] / 255;
    
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

    return "hsl(" + h + "," + s + "%," + l + "%)";
}

depose.addEventListener("drop", function () {
    var hsl1 = "";
    setTimeout(() => {
        console.log("Delayed for 0.5 second.");
        color1 = document.getElementById("color1");
        console.log(color1);
        let rgbColor1 = color1.style.backgroundColor;
        console.log(color1.style.backgroundColor);
        hsl1 = hsl(rgbColor1);
        console.log(hsl1);
        
      }, 500);
});


 /* rgbToHsl (sColor,bSupAlpha){
    var aHsl=sColor.match(this._sRegRgb);
    if(aHsl!=null&&aHsl.length==5){
        var a=aHsl[4]||undefined,
            r=aHsl[1]/255,
            g=aHsl[2]/255,
            b=aHsl[3]/255,
            bAlpha=this._hasAlpha(aHsl[4]);
        var max=Math.max(r,g,b),
            min=Math.min(r,g,b);
        var h,
            s,
            l=(max+min)/2;
        if(max==min){
            h=s=0;
        }else{
            var d=max-min;s=l>0.5?d/(2-max-min):d/(max+min);
            switch(max){
                case r:
                    h=(g-b)/d+(g<b?6:0);
                    break;
                case g:
                    h=(b-r)/d+2;
                    break;
                case b:
                    h=(r-g)/d+4;
                    break;
            }
            h/=6;
        }function
    return"hsl"+(bAlpha==true&&bSupAlpha==false?'a':'')+"("+Math.round(h*360)+", "+Math.round(s*100)+"%, "+Math.round(l*100)+"%"+(bAlpha==true&&bSupAlpha==false?", "+a:'')+")";
    }
return undefined;
}; */