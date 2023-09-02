$(document).ready(function () {
    $.ajax({
        url: '/Garage-V-Parrot/config/show-vehicules.php', // URL relative si vous êtes en local
        dataType: 'json',
        success: function (data) {
            let vehicules = document.querySelectorAll(".vehicules-img");
            let vehiculeImg = document.querySelector(".vehicule-img");

            function setActive(event) {
                // Supprime la classe "vehicule-active" de tous les éléments ayant la classe "vehicules-img"
                vehicules.forEach(function (vehicule) {
                    vehicule.classList.remove("vehicule-active");
                });
                // Ajoute la classe "vehicule-active" à l'élément cliqué
                event.currentTarget.classList.add("vehicule-active");
                vehiculeImg.src = event.currentTarget.src;

                // Récupérez les caractéristiques du véhicule à partir des données que vous avez déjà récupérées
                var id = event.currentTarget.getAttribute("data-id");
                // Recherchez les données spécifiques du véhicule en utilisant l'ID
                var vehiculeData = data.find(function (item) {
                    return item.id === id;
                });

                if (vehiculeData) {
                    var modele = vehiculeData.modele;
                    var annee = vehiculeData.annee;
                    var kilometrage = vehiculeData.kilometrage;
                    var prix = vehiculeData.prix;
                    var description = vehiculeData.description;

                    // Appelez la fonction pour afficher les caractéristiques
                    afficherCaracteristiques(id, modele, annee, kilometrage, prix, description);
                }
            }

            // Ajoute un gestionnaire de clic à chaque élément ayant la classe "vehicules-img"
            vehicules.forEach(function (vehicule) {
                vehicule.addEventListener("click", setActive);
            });

            function afficherCaracteristiques(id, modele, annee, kilometrage, prix, description) {
                // Sélectionnez le conteneur d'affichage des caractéristiques
                var vehiculeCard = document.querySelector(".vehicule-card");

                // Mettez à jour les éléments de la .vehicule-card avec les caractéristiques du véhicule sélectionné
                var vehiculeImg = vehiculeCard.querySelector(".vehicule-img");
                vehiculeImg.src = "/Garage-V-Parrot/assets/images/images-vehicules/" + id + ".png"; // Supposons que les images ont des noms correspondant aux IDs
                var vehiculeModel = vehiculeCard.querySelector(".vehicule-model");
                vehiculeModel.textContent = modele;
                var vehiculeYear = vehiculeCard.querySelector(".vehicule-year");
                vehiculeYear.textContent = annee;
                var vehiculeKm = vehiculeCard.querySelector(".vehicule-km");
                vehiculeKm.textContent = kilometrage + " km";
                var vehiculeDescription = vehiculeCard.querySelector(".vehicule-description");
                vehiculeDescription.textContent = description;
                var vehiculePrice = vehiculeCard.querySelector(".vehicule-price");
                vehiculePrice.textContent = prix + " €";
            }
        }
    });
});
