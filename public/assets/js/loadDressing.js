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
                    <div id="add-wide-cloth">
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
        console.log(dressingContent.childNodes);
        dressingContent.childNodes[1].style.display = "none";
    }
}

function loadDressingContent(type){
    // console.log(type);
    fetch('/style/' + type)
        .then(function (header) {
            return header.json();
        })
        .then(function (body) {
            // console.log(body.typeVetements);
            ul.innerHTML = "";
            for (i = 0; i < body.typeVetements.length; i++) {
                ul.innerHTML += `
                <input class="button-tags" type="radio" name="style" id="type-${body.typeVetements[i]}" autocomplete="off" list>
                <label class="button-tags typeBtn" for="type-${body.typeVetements[i]}">${body.typeVetements[i]}</label>
            `;
            }
        })

    fetch('/list-vetements/' + type)
        .then(function (header) {
            return header.json();
        })
        .then(function (body) {
            body = JSON.parse(body);

            // Vider le dressing
            dressingContent.innerHTML = '';
            addWideCloth();
            document.querySelector(".add").style.display = "flex";

            if(window.innerWidth < 768){
                dressingContent.childNodes[1].style.display = "none";
            } else {
                document.querySelector(".add").style.display = "none";
            }
            
            // Afficher l'ensemble des cards dans le dressing (boucle for)
            for (i = 0; i < body.listeVetements.length; i++) {
                // console.log(body.listeVetements[i]['colorName'][0]);
                dressingContent.innerHTML += `
                <div class="cards">
                    <div class="delete" data-index="${(body.listeVetements[i]['id'])}" onclick="deleteOneCloth(${(body.listeVetements[i]['id'])})">
                        <img src="/assets/img/delete-icon.svg" alt="Supprimer un vêtement" srcset="">
                    </div>
                    <div class="cards-style">
                        <div>
                            <img src="./assets/user_img/${(body.listeVetements[i]['image'])}" alt="${(body.listeVetements[i]['alt'])}">
                        </div>
                        <div class="info-vetement">
                            <div>
                                <div>
                                    <p class="card-type card-data">${(body.listeVetements[i]['style'])}</p>
                                </div>
                                <div>
                                <div>
                                    <p class="card-color card-data">${(body.listeVetements[i]['colorName'][0])}</p><span class="span-color1 card-data" style="background-color:${(body.listeVetements[i]['color'][0])}"></span>
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
        })
}

window.addEventListener("resize", resizeDressing);