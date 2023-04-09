//FICHIER JS : MIX AND MATCH AVEC AFFICHAGE DES VÊTEMENTS SUR LES CARTE RÉCUPÉRÉ EN BDD + RÉINITIALISATION DU MIX AND MATCH

//ASSURE UN BON FONCTIONNEMENT DU CODE 
window.addEventListener('DOMContentLoaded', () => {

    //VARIABLES DU MIX AND MATCH
    let BtnmMat = document.getElementById('mixmatch');
    console.log(BtnmMat);
    let CardDoute = document.getElementById('doute');
    let CardDchance = document.getElementById('chance');
    let hautGenerator = document.getElementById('hautGenerator1');
    let basGenerator = document.getElementById('basGenerator1');
    let randomTab = [];

    //VARIABLES DES CARTES:
    //CARTE 1
    let cardHaut1 = document.getElementById('cardHaut1');
    let cardBas1 = document.getElementById('cardBas1');
    //CARTE 2
    let cardHaut2 = document.getElementById('cardHaut2');
    let cardBas2 = document.getElementById('cardBas2');
    //CARTE 3
    let cardHaut3 = document.getElementById('cardHaut3');
    let cardBas3 = document.getElementById('cardBas3');

    //RECUPERATION DES li POUR AFFICHAGE DES INFORMATIONS DU VÊTEMENT
    let li = document.querySelectorAll('.card-data');
    console.log(li);

    //CLIC 
    let clic = 0;

    // RESET
    let Btnreset = document.getElementById('reset');

    //FONCTION DU MIX AND MATCH AVEC RÉCUPÉRATION DES INFORMATIONS EN BASE DE DONNÉE
    function mixMatch() {
        clic++;
        //console.log(clic);
        fetch('/generator/')
            .then(function (header) {
                return header.json();
            })
            .then(function (body) {
                body = JSON.parse(body);
                //console.log(body.combinaisons[0]);

                //COMBINAISON DE LA PREMIÈRE CARTE + AFFICHAGE 
                if (clic == 1) {
                    BtnmMat.textContent = CardDoute.textContent;
                    random = randomPick(body.combinaisons);
                    randomTab.push(random);
                    //console.log(random);
                    
                    hautGenerator.innerHTML = `
                    <img src=".//assets/user_img/${body.combinaisons[random]['imageHaut']}" alt="${body.combinaisons[random]['altHaut']}">
                    `;
                    basGenerator.innerHTML = `
                    <img src=".//assets/user_img/${body.combinaisons[random]['imageBas']}" alt="${body.combinaisons[random]['altBas']}">
                    `;
                    cardHaut1.innerHTML = `
                    <img src=".//assets/user_img/${body.combinaisons[random]['imageHaut']}" alt="${body.combinaisons[random]['altHaut']}">
                    `;
                    cardBas1.innerHTML = `
                     <img src=".//assets/user_img/${body.combinaisons[random]['imageBas']}" alt="${body.combinaisons[random]['altBas']}">
                    `;
                    li[0].textContent = `${body.combinaisons[random]['styleHaut']}`;
                    li[1].textContent = `${body.combinaisons[random]['colorNameHaut']}`;
                    li[2].style.backgroundColor = `${body.combinaisons[random]['colorHaut']}`;

                    li[5].textContent = `${body.combinaisons[random]['styleBas']}`;
                    li[6].textContent = `${body.combinaisons[random]['colorNameBas']}`;
                    li[7].style.backgroundColor = `${body.combinaisons[random]['colorBas']}`;

                    //COMBINAISON DE LA DEUXIÈME CARTE + AFFICHAGE
                } else if (clic == 2) {
                    BtnmMat.textContent = CardDchance.textContent;
                    random = randomPick(body.combinaisons);
                    randomTab.push(random);

                    hautGenerator.innerHTML = `
                    <img src=".//assets/user_img/${body.combinaisons[random]['imageHaut']}" alt="${body.combinaisons[random]['altHaut']}">
                    `;
                    basGenerator.innerHTML = `
                    <img src=".//assets/user_img/${body.combinaisons[random]['imageBas']}" alt="${body.combinaisons[random]['altBas']}">
                    `;
                    cardHaut2.innerHTML = `
                    <img src=".//assets/user_img/${body.combinaisons[random]['imageHaut']}" alt="${body.combinaisons[random]['altHaut']}">
                    `;
                    cardBas2.innerHTML = `
                     <img src=".//assets/user_img/${body.combinaisons[random]['imageBas']}" alt="${body.combinaisons[random]['altBas']}">
                    `;
                    li[10].textContent = `${body.combinaisons[random]['styleHaut']}`;
                    li[11].textContent = `${body.combinaisons[random]['colorNameHaut']}`;
                    li[12].style.backgroundColor = `${body.combinaisons[random]['colorHaut']}`;

                    li[15].textContent = `${body.combinaisons[random]['styleBas']}`;
                    li[16].textContent = `${body.combinaisons[random]['colorNameBas']}`;
                    li[17].style.backgroundColor = `${body.combinaisons[random]['colorBas']}`;

                    //COMBINAISON DE LA TROISIÈME CARTE + AFFICHAGE
                } else if (clic == 3) {
                    random = randomPick(body.combinaisons);
                    randomTab.push(random);

                    hautGenerator.innerHTML = `
                    <img src=".//assets/user_img/${body.combinaisons[random]['imageHaut']}" alt="${body.combinaisons[random]['altHaut']}">
                    `;
                    basGenerator.innerHTML = `
                    <img src=".//assets/user_img/${body.combinaisons[random]['imageBas']}" alt="${body.combinaisons[random]['altBas']}">
                    `;
                    cardHaut3.innerHTML = `
                    <img src=".//assets/user_img/${body.combinaisons[random]['imageHaut']}" alt="${body.combinaisons[random]['altHaut']}">
                    `;
                    cardBas3.innerHTML = `
                     <img src=".//assets/user_img/${body.combinaisons[random]['imageBas']}" alt="${body.combinaisons[random]['altBas']}">
                    `;
                    li[20].textContent = `${body.combinaisons[random]['styleHaut']}`;
                    li[21].textContent = `${body.combinaisons[random]['colorNameHaut']}`;
                    li[22].style.backgroundColor = `${body.combinaisons[random]['colorHaut']}`;

                    li[25].textContent = `${body.combinaisons[random]['styleBas']}`;
                    li[26].textContent = `${body.combinaisons[random]['colorNameBas']}`;
                    li[27].style.backgroundColor = `${body.combinaisons[random]['colorBas']}`;
                }
            })

    }
    //DÉCLANCHEUR DE LA FONCTION MIX AND MATCH AU CLIC 
    BtnmMat.addEventListener('click', mixMatch);

    //FONCTION RÉINILTIALISATION DU MIX AND MATCH
    function reset() {
        BtnmMat.textContent = "Mix and Match";
        hautGenerator.innerHTML = '';
        basGenerator.innerHTML = '';
        cardHaut1.innerHTML = '';
        cardBas1.innerHTML = '';
        randomTab =[];
        li[0].textContent = `Type de vêtement`;
        li[1].textContent = `Couleur 1`;
        li[2].style.backgroundColor = `#CA7A83`;

        li[5].textContent = `Type de vêtement`;
        li[6].textContent = `Couleur 1`;
        li[7].style.backgroundColor = `#CA7A83`;

        cardHaut2.innerHTML = '';
        cardBas2.innerHTML = '';
        li[10].textContent = `Type de vêtement`;
        li[11].textContent = `Couleur 1`;
        li[12].style.backgroundColor = `#CA7A83`;

        li[15].textContent = `Type de vêtement`;
        li[16].textContent = `Couleur 1`;
        li[17].style.backgroundColor = `#CA7A83`;

        cardHaut3.innerHTML = '';
        cardBas3.innerHTML = '';
        li[20].textContent = `Type de vêtement`;
        li[21].textContent = `Couleur 1`;
        li[22].style.backgroundColor = `#CA7A83`;

        li[25].textContent = `Type de vêtement`;
        li[26].textContent = `Couleur 1`;
        li[27].style.backgroundColor = `#CA7A83`;

        clic = 0;
    }

    function randomPick(combinaisons){
        let randomPickValue = Math.floor(Math.random() * combinaisons.length);
        console.log(randomTab);
        //console.log(randomTab.includes(randomPickValue));
        if(randomTab.includes(randomPickValue)){
            randomPick(combinaisons);
        } else {
            //console.log(randomPickValue);
            return randomPickValue; 
        }
    }

    //DÉCLANCHEUR DE LA FONCTION RESET AU CLIC
    Btnreset.addEventListener('click', reset);
});