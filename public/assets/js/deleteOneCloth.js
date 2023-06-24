//FICHIER JS: SUPPRESSION D'UN VETEMENT DANS LE DRESSING

//ASSURE LE BON DÉROULEMENT DU SCRIPT 
dressingContent = document.getElementById('dressingContent');
delBtn = document.querySelectorAll('.deleteOneCloth');

function deleteOneCloth(currentId){
    type = dressingContent.dataset['type'];
    style = "Tout";
    id = currentId;
    console.log('/delete/' + type +'/' + id);
    fetch('/delete/' + type +'/' + id)
            .then(function (header) {
                return header;
            })
            .then(
                loadDressingContent(type, style)
            );
}