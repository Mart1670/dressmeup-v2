window.addEventListener('DOMContentLoaded', () => {
    typeFilterButtons = document.querySelectorAll("#type-vetements label");

    function dressingFilter(e){
        filter = e.currentTarget.textContent;

        fetch('/filter-dressing/' + filter)
            .then(function (header){
                return header.json();
            })
            .then(function (body) {
                
            });
    }

    for(i = 0; i < typeFilterButtons.length; i++){
        typeFilterButtons[i].addEventListener("click", dressingFilter);
    }
});