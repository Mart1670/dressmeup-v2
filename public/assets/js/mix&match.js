//FICHIER JS : MIX AND MATCH AVEC AFFICHAGE DES VÊTEMENTS SUR LES CARTE RÉCUPÉRÉ EN BDD + RÉINITIALISATION DU MIX AND MATCH

//ASSURE UN BON FONCTIONNEMENT DU CODE 
window.addEventListener('DOMContentLoaded', () => {

    //VARIABLES DU MIX AND MATCH
    let BtnmMat = document.getElementById('mixmatch');
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
    let li = document.querySelectorAll('#cards-style li');
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
                    li[1].innerHTML = `${body.combinaisons[random]['colorNameHaut']}<span class="color-mark" style="background-color:${body.combinaisons[random]['colorHaut']}"></span>`;

                    li[3].textContent = `${body.combinaisons[random]['styleBas']}`;
                    li[4].innerHTML = `${body.combinaisons[random]['colorNameBas']}<span class="color-mark" style="background-color:${body.combinaisons[random]['colorBas']}"></span>`;

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
                    li[6].textContent = `${body.combinaisons[random]['styleHaut']}`;
                    li[7].innerHTML = `${body.combinaisons[random]['colorNameHaut']}<span class="color-mark" style="background-color:${body.combinaisons[random]['colorHaut']}"></span>`;

                    li[9].textContent = `${body.combinaisons[random]['styleBas']}`;
                    li[10].innerHTML = `${body.combinaisons[random]['colorNameBas']}<span class="color-mark" style="background-color:${body.combinaisons[random]['colorBas']}"></span>`;

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
                    li[12].textContent = `${body.combinaisons[random]['styleHaut']}`;
                    li[13].innerHTML = `${body.combinaisons[random]['colorNameHaut']}<span class="color-mark" style="background-color:${body.combinaisons[random]['colorHaut']}"></span>`;

                    li[15].textContent = `${body.combinaisons[random]['styleBas']}`;
                    li[16].innerHTML = `${body.combinaisons[random]['colorNameBas']}<span class="color-mark" style="background-color:${body.combinaisons[random]['colorBas']}"></span>`;
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
        li[0].textContent = `Tee-Shirt`;
        li[1].innerHTML = `
            Première couleur<span class="color-mark" style="background-color:#00FA9A"></span>
        `;
        li[3].textContent = `Pantalon`;
        li[4].innerHTML = `
            Première couleur<span class="color-mark" style="background-color:#00FA9A"></span>
         `;
        cardHaut2.innerHTML = '';
        cardBas2.innerHTML = '';
        li[6].textContent = `Tee-Shirt`;
        li[7].innerHTML = `
            Première couleur<span class="color-mark" style="background-color:#00FA9A"></span>
        `;
        li[9].textContent = `Pantalon`;
        li[10].innerHTML = `
            Première couleur<span class="color-mark" style="background-color:#00FA9A"></span>
         `;
        cardHaut3.innerHTML = '';
        cardBas3.innerHTML = '';
        li[12].textContent = `Tee-Shirt`;
        li[13].innerHTML = `
            Première couleur<span class="color-mark" style="background-color:#00FA9A"></span>
        `;
        li[15].textContent = `Pantalon`;
        li[16].innerHTML = `
            Première couleur<span class="color-mark" style="background-color:#00FA9A"></span>
        `;
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