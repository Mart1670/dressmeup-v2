//FICHIER JS: CHARGEMENT DU DRESSING

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
            <li class="tag_vet me-3 btn">${body.typeVetements[i]}</li>
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