//FICHIER JS: CHARGEMENT DU DRESSING
function resizeDressing(){
    if(window.innerWidth < 768){
        document.querySelector(".add").style.display = "flex";
        dressingContent.childNodes[1].style.display = "none";
    } else {
        dressingContent.childNodes[1].style.display = "flex";
        document.querySelector(".add").style.display = "none";
    }
}

function addWideCloth(){
    dressingContent.innerHTML = `
        <div class="cards">
            <div class="cards-style">
                <a href="vetement">
                    <div class="add-wide-cloth">
                    </div>
                </a>
                <div class="info-vetement">
                    <div>
                        <div>
                            <p class="card-type card-data">Ajouter</p>
                        </div>
                        <div>
                        <div>
                            <p class="card-color card-data">Couleur 1</p><span class="span-color1 card-data"></span>
                        </div>
                        <div>
                            <p class="card-color card-data">Couleur 2</p><span class="span-color2 card-data"></span>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>`;
    if(window.innerWidth < 768){
        // console.log(dressingContent.childNodes);
        dressingContent.childNodes[1].style.display = "none";
    }
}

function displayDressing(tab){
    for (i = 0; i < tab.length; i++) {
        // console.log(body.listeVetements[i]['colorName'][0]);
        dressingContent.innerHTML += `
        <div class="cards">
            <div class="delete" data-index="${(tab[i]['id'])}" onclick="deleteOneCloth(${(tab[i]['id'])})">
                <img src="/assets/img/delete-icon.svg" alt="Supprimer un vêtement" srcset="">
            </div>
            <div class="cards-style">
                <div>
                    <img src="./assets/user_img/${(tab[i]['image'])}" alt="${(tab[i]['alt'])}">
                </div>
                <div class="info-vetement">
                    <div>
                        <div>
                            <p class="card-type card-data">${(tab[i]['style'])}</p>
                        </div>
                        <div>
                        <div>
                            <p class="card-color card-data">${(tab[i]['colorName'][0])}</p><span class="span-color1 card-data" style="background-color:${(tab[i]['color'][0])}"></span>
                        </div>
                        <div>
                            <p class="card-color card-data">Couleur 2</p><span class="span-color2 card-data"></span>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>`
    };
}

function emptyDressingContent(){
    dressingContent.innerHTML = '';
}

function displayAddCard(){
    // Vider le dressing

    addWideCloth();
    document.querySelector(".add").style.display = "flex";

    if(window.innerWidth < 768){
        dressingContent.childNodes[1].style.display = "none";
    } else {
        document.querySelector(".add").style.display = "none";
    }
}

function loadDressingContent(type, style){

    // console.log(type);
    fetch('/style/' + type)
        .then(function (header) {
            return header.json();
        })
        .then(function (body) {
            // console.log(body.typeVetements);
            ul.innerHTML = "";
            ul.innerHTML += `
                <input class="button-tags" type="radio" name="style" id="style-all" autocomplete="off" list checked="checked">
                <label class="button-tags typeBtn" for="style-all">Tout</label>
            `;
            for (i = 0; i < body.typeVetements.length; i++) {
                ul.innerHTML += `
                <input class="button-tags" type="radio" name="style" id="style-${body.typeVetements[i]}" autocomplete="off" list>
                <label class="button-tags typeBtn" for="style-${body.typeVetements[i]}">${body.typeVetements[i]}</label>
            `;

        }   
            typeFilterButtons = document.querySelectorAll("#type-vetements label");
            for(i = 0; i < typeFilterButtons.length; i++){
                typeFilterButtons[i].addEventListener('click', dressingFilter);
            }
        })

    fetch('/list-vetements/' + type + '/' + style)
        .then(function (header) {
            return header.json();
        })
        .then(function (body) {
            body = JSON.parse(body);
            emptyDressingContent();
            displayAddCard();
            // Afficher l'ensemble des cards dans le dressing (boucle for)
            displayDressing(body.listeVetements);
        })
}

function dressingFilter(e){
    filter = e.currentTarget.textContent;
    // console.log(filter);
    fetch('/list-vetements/' + type + '/' + filter)
        .then(function (header){
            return header.json();
        })
        .then(function (body) {
            body = JSON.parse(body);
            // console.log(body.listeVetements);
            emptyDressingContent();
            displayAddCard();
            displayDressing(body.listeVetements);
        });
}

window.addEventListener("resize", resizeDressing);