//FICHIER JS: MODAL

//ASSURE LE BON DÉROULEMENT DU SCRIPT 
window.addEventListener('DOMContentLoaded', () => {

     //VALEURS
     let ButtonsOpen = document.querySelectorAll('.btn-modal');
     let ButtonsClose = document.querySelectorAll('.btn-close-modal');
     let vetement_form = document.getElementById('form_vetement');
     let btnSubmitVetementForm = document.getElementById('btnSubmitVetementForm');
     //console.log(ButtonsOpen);

     if (!ButtonsOpen || !ButtonsClose)
          return;

     //FONCTION MODAL 
     function modal() {
          modalElement = document.getElementById("modal");
          modalElement.style.visibility = (modalElement.style.visibility == "visible") ? "hidden" : "visible";
          modalElement.style.top = window.scrollY + "px";
     }

     //OUVERTUR DU MODAL GRACE AU CLIQUE
     ButtonsOpen.forEach((Btnopen) => {
          Btnopen.addEventListener('click', modal);
     });

     //FERMETURE DU MODAL GRACE AU CLIQUE
     ButtonsClose.forEach((Btnclose) => {
          Btnclose.addEventListener('click', modal);
     });

     //DÉCLENCHEMENT DE LA FONCTION AU CLIC 
     btnSubmitVetementForm.addEventListener('click', validForm);

     function validForm() {
          vetement_form.submit();
     }
});
