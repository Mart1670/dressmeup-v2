//ASSURE LE BON DÉROULEMENT DU SCRIPT
window.addEventListener('DOMContentLoaded', () => {

let btnGender = document.querySelectorAll("#genre label");
let radioGender = document.querySelectorAll("#genre input");
let genderField = document.getElementById("registration_form_sexe");

function selectGender(e){
    genderField.value = e.currentTarget.textContent;
    radioGender[e.currentTarget.dataset.index].checked = "checked";
}

for(i = 0 ; i < btnGender.length ; i++){
    btnGender[i].addEventListener("click", selectGender);
}

});