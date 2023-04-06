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
                    <div class="card col-3 p-0 m-0 card-dress">
                    <div>
                    <img class="card-img-top photo_cloth img-fluid border-bottom border-2 border-dark" src="./assets/user_img/${(body.listeVetements[i]['image'])}"alt="${(body.listeVetements[i]['alt'])}">
                    </div>
                    <div class="col-12 mt-3">
                    <ul class="tag-vetement card-dress ">
                    <li class="">${(body.listeVetements[i]['style'])}</li>
                    <li class="d-flex justify-content-between align-items-stretch">${(body.listeVetements[i]['colorName'][0])}<span
                    class="color-mark" style="background-color:${(body.listeVetements[i]['color'][0])}"></span>
                    </li>
                    <li class="d-none d-flex justify-content-between align-items-stretch">Green Yellow<span
                    class="color-mark" style="background-color:#00FA9A"></span></li>
                    </ul>
                    <div>
                    <span class="deleteOneCloth" data-index="${(body.listeVetements[i]['id'])}" onclick="deleteOneCloth(${(body.listeVetements[i]['id'])})">Supprimer</span>
                    </div>
                    </div>
                    </div>`;
            };
        })
}