document.querySelector(".service-delete").addEventListener("click", function() {
    var id = this.nextElementSibling.textContent;
    var serviceElement = this.closest(".service");

    // Demandez confirmation à l'utilisateur
    if (confirm("Êtes-vous sûr de vouloir supprimer cet élément ?")) {
    // Effectuez une requête AJAX pour supprimer l'élément
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "/Garage-V-Parrot/includes/service.php?execute_script=true&id=" + id, true);
        xhr.send();
        serviceElement.remove();
    }
});