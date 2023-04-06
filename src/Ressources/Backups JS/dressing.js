//FICHIER JS: CONDITIONNER LE SECOND SÉLECTEUR EN FONCTION DU PREMIER

//ASSURE LE BON DÉROULEMENT DU SCRIPT 
window.addEventListener('DOMContentLoaded', () => {

    //FONCTION
    function changeStyle(evt) {
        let value = document.querySelectorAll('.vetement_form_type').value;
        //console.log(value);

        if (value == 'haut') {
            let valueTab = ['Tee-Shirt', 'SweatShirt', 'Maille', 'Chemise', 'Gilet', 'Veste'];
            let vetement_form_style = document.getElementById('vetement_form_style');
            vetement_form_style.innerHTML = '';
            valueTab.forEach((v, k) => {
                var opt = document.createElement('option');
                opt.value = v;
                opt.innerHTML = v;
                vetement_form_style.appendChild(opt);
            })
        }

        //
        if (value == 'bas') {
            let valueTab = ['Pantalon', 'Jean', 'Chino', 'Short', 'Jogging'];
            let vetement_form_style = document.getElementById('vetement_form_style');
            vetement_form_style.innerHTML = '';
            valueTab.forEach((v, k) => {
                var opt = document.createElement('option');
                opt.value = v;
                opt.innerHTML = v;
                vetement_form_style.appendChild(opt);
            })
        }
    }
});    