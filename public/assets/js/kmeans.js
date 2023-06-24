var newColorField1 = document.getElementById('vetement_form_newColor');
var vetementColor1 = document.getElementById('vetement_form_color');
var fileField = document.getElementById('vetement_form_image');

var color1 = document.getElementById("color1");


function euclidean(p1, p2) {
    var s = 0;
    for (var i = 0, l = p1.length; i < l; i++) {
        s += Math.pow(p1[i] - p2[i], 2)
    }
    return Math.sqrt(s);
}

function calculateCenter(points, n) {
    var vals = []
    , plen = 0;
    for (var i = 0; i < n; i++) { vals.push(0); }
    for (var i = 0, l = points.length; i < l; i++) {
    plen++;
        for (var j = 0; j < n; j++) {
            vals[j] += points[i][j];
        }
    }
    for (var i = 0; i < n; i++) {
        vals[i] = vals[i] / plen;
    }
    return vals;
}

function kmeans(points, k, min_diff) {
    // Stockage du nombre de pixels
    plen = points.length;
    // Initialisation du tableau qui va stocker les données des pixels des différents clusters
    clusters = [];
    // Initialisation du tableau qui stockera l'id des pixels déjà analysés
    seen = [];
    // Boucle sur l'ensemble des pixels pour déterminer les 3 clusters
    while (clusters.length < k) {

        // Génération aléatoire des clusters
        idx = parseInt(Math.random() * plen);
        // Initialisation de la variable
        found = false;
        // Boucle pour s'assurer que le cluster sélectionné de façon aléatoire n'a pas déjà été sélectionné
        for (var i = 0; i < seen.length; i++ ) {
            if (idx === seen[i]) {
            found = true;
            break;
            }
        }
        // Si le point aléatoire n'a pas encore été sélectionné, on l'ajoute dans le tableau comme cluster
        if (!found) {
            seen.push(idx);
            clusters.push([points[idx], [points[idx]]]);
        }
        // console.log(clusters);
    }

    while (true) {
    plists = [];
    for (var i = 0; i < k; i++) {
        plists.push([]);
        // console.log("plists = "+plists);
    }

    // boucle en fonction du nombre de pixel (ensemble des pixels)
    for (var j = 0; j < plen; j++) {
        // Stockage des données RGB (combinées) du pixel actif dans la varaible
        var p = points[j]
        , smallest_distance = 10000000
        , idx = 0;
        // Boucle sur les 3 clusters pour déterminer le plus proche
        for (var i = 0; i < k; i++) {
            // Calcul de la distance selon la méthode euclidiènne
            var distance = euclidean(p, clusters[i][0]);
            // Test pour déterminer le cluster le plus proche par comparaison à chaque pas
            if (distance < smallest_distance) {
                smallest_distance = distance;
                idx = i;
            }
        }
        // Insertion du pixel (code RGB) dans le tableau à l'index du cluster correspondant
        plists[idx].push(p);
    }

    // Initialisation de la variable pour le test de différence entre les clusters
    var diff = 0;
    // Boucle pour mettre à jour les clusters
    for (var i = 0; i < k; i++) {
        var old = clusters[i]
        , list = plists[i]
        , center = calculateCenter(plists[i], 3)
        , new_cluster = [center, (plists[i])]
        , dist = euclidean(old[0], center);
        clusters[i] = new_cluster
        diff = diff > dist ? diff : dist;
    }
    if (diff < min_diff) {
        break;
    }
    }
    clusters.sort(function (a, b) {
        return b[1].length - a[1].length;
        /* console.log(a[1].length); */
    });
    // console.log(clusters);
    return clusters;
}

function rgbToHex(rgb) {
    // Fonction de conversion des codes RGB en codes Héxadécimaux
    function th(i) {
        // Conversion des code RGB en code Héxadécimal à l'indice du tableau i
        var h = parseInt(i).toString(16);
        // Renvoi du code Héxadécimal en y ajoutant un "0" devant (pour obtenir 2 caractères) si la longueur est de 1
        return h.length == 1 ? '0'+h : h;
    }
    // Concaténation des codes R, G et B en un code Héxadécimal complet
    return '#' + th(rgb[0]) + th(rgb[1]) + th(rgb[2]);
}

function process_image(ctx) {
    // Création d'un tableau qui va recevoir les codes RGB de chaque pixel
    var points = [];
    // Récupération des données R, G et B de chaque pixel
    data = ctx.getImageData(50, 50, canvas.width-100, canvas.height-100).data;
    console.log(data);
    // Boucle sur chaque donnée R, G et B de chaque pixel par pas de 4 (afin de récupérer le RGB de chaque pixel séparément)
    for (var i = 0, l = data.length; i < l;  i += 4) {
        // Stockage des données R, G et B de chaque pixel dans des variables séparée
        var r = data[i],
            g = data[i+1],
            b = data[i+2];
        // Insertion des données R, G et B de chaque pixel dans un tableau les regroupant
        points.push([r, g, b]);
    }
    // Stockage du résultat issue du traitement de l'algorithme avec en paramètre le tableau des codes RGB de chaque pixel le nombre de clusters (couleurs de référence) et le minimum de différence attendu
    var results = kmeans(points, 8, 1),
        // Création d'un tableau qui va recevoir les codes Hexadecimaux issue du traitement
        hex = [];
    // Boucle sur les résultats du traitement par l'algorithme "K-Moyenne" pour les convertir en code Héxadécimal
    for (var i = 0; i < results.length; i++) {
        // Conversion des codes RGB en Hexadécimal
        hex.push(rgbToHex(results[i][0]));
    }
    // Renvoi du tableau contenant les codes Hexadécimaux
    return hex;
}

function analyze(ctx) {
    // Récupération des données issues du traitement et passage en paramètre de l'image et du canvas
    var colors = process_image(ctx)
    // Récupération des éléments DOM permettant d'afficher les couleurs
    var color1 = document.getElementById('color1')
        // , color2 = document.getElementById('color2')
    //RÉCUPÉRATION DES NOMS DES COULEURS DANS LA BASE DE DONNÉES POUR AFFICHAGE
    color1.style.backgroundColor = colors[0];
    vetementColor1.value = colors[0];
    newColorField1.value = colors[0];
    colorNameTrigger(colors[0]);
}