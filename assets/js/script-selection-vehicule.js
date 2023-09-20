// Script d'affichage du véhicule et carousel 
let vehicules = document.querySelectorAll(".vehicules-img");

function setActive(event) {
    let vehiculesParent = event.currentTarget.closest('.vehicules');
    let vehiculeImg = document.querySelector(".vehicule-img");
    let vehiculeModel = document.querySelector('.vehicule-model');
    let vehiculeYear = document.querySelector('.vehicule-year');
    let vehiculeKm = document.querySelector('.vehicule-km');
    let vehiculeDescription = document.querySelector('.vehicule-description');
    let vehiculePrice = document.querySelector('.vehicule-price');
    let inputModel = document.querySelector('#vehiculeModel');
    let inputYear = document.querySelector('#vehiculeYear');
    let inputKm = document.querySelector('#vehiculeKm');



    // Supprime la classe "vehicule-active" de tous les éléments ayant la classe "vehicules-img"
    vehicules.forEach(function (vehicule) {
        vehicule.classList.remove("vehicule-active");
    });
    // Ajoute la classe "vehicule-active" à l'élément cliqué
    event.currentTarget.classList.add("vehicule-active");

    let vehiculesModel = vehiculesParent.querySelector('.vehicules-model');
    let vehiculesYear = vehiculesParent.querySelector('.vehicules-year');
    let vehiculesKm = vehiculesParent.querySelector('.vehicules-km');
    let vehiculesDescription = vehiculesParent.querySelector('.vehicules-description');
    let vehiculesPrice = vehiculesParent.querySelector('.vehicules-price');

    vehiculeImg.src = event.currentTarget.src;
    vehiculeModel.innerHTML = vehiculesModel.textContent;
    vehiculeYear.innerHTML = vehiculesYear.textContent;
    vehiculeKm.innerHTML = vehiculesKm.textContent;
    vehiculeDescription.innerHTML = vehiculesDescription.textContent;
    vehiculePrice.innerHTML = vehiculesPrice.textContent;
    inputModel.value = vehiculesModel.textContent;
    inputYear.value = vehiculesYear.textContent;
    inputKm.value = vehiculesKm.textContent;
}

// Ajoute un gestionnaire de clic à chaque élément ayant la classe "vehicules-img"
vehicules.forEach(function (vehicule) {
    vehicule.addEventListener("click", setActive);
});

// Si #filter pas cliqué afficher tous les vehicules
if (!document.getElementById('filter').clicked) {
    let showVehicules = document.querySelector('.show-vehicules');
    showVehicules.classList.remove('hide');
}

// Fonctionne avec JQuery
$(document).ready(function () {

    // Lorsque le bouton "Appliquer le filtre" est cliqué
    $("#filter").click(function () {

        // Désaficher tous les véhicules
        let showVehicules = document.querySelector('.show-vehicules');
        showVehicules.classList.add('hide');

        // On récupere les valeurs du formulaire
        var price = $("#price").val();
        var year = $("#year").val();
        var km = $("#km").val();

        // On envoi les données au serveur via AJAX
        $.ajax({
            type: "POST",
            url: "../scripts/affichage/affichage-filtered-vehicules.php",
            data: { price: price, year: year, km: km },
            dataType: "json",
            success: function (data) {
                // On vide le contenu de la div contenant les résultats
                $("#results").empty();

                // On récupere les données renvoyées par le serveur et on les traite
                if (Array.isArray(data) && data.length > 0) {
                    $.each(data, function (index, vehicle) {
                        var html = '<div class="vehicules">';
                        html += '<img class="vehicules-img" src="../assets/images/images-vehicules/' + vehicle.image + '">';
                        html += '<div class="hided-infos" style="display: none;">';
                        html += '<span class="vehicules-model">' + vehicle.model + '</span>';
                        html += '<span class="vehicules-infos vehicules-year">' + vehicle.year + '</span>';
                        html += '<span class="vehicules-infos vehicules-km">' + vehicle.kilometrage + ' km</span>';
                        html += '<span class="vehicules-description">' + vehicle.description + '</span>';
                        html += '<span class="vehicules-price">' + vehicle.price + ' €</span>';
                        html += '</div>';
                        html += '</div>';

                        $("#results").append(html);

                        // Script d'affichage du véhicule et carousel 
                        let vehicules = document.querySelectorAll(".vehicules-img");

                        function setActive(event) {
                            let vehiculesParent = event.currentTarget.closest('.vehicules');
                            let vehiculeImg = document.querySelector(".vehicule-img");
                            let vehiculeModel = document.querySelector('.vehicule-model');
                            let vehiculeYear = document.querySelector('.vehicule-year');
                            let vehiculeKm = document.querySelector('.vehicule-km');
                            let vehiculeDescription = document.querySelector('.vehicule-description');
                            let vehiculePrice = document.querySelector('.vehicule-price');
                            let inputModel = document.querySelector('#vehiculeModel');
                            let inputYear = document.querySelector('#vehiculeYear');
                            let inputKm = document.querySelector('#vehiculeKm');


                            // Supprime la classe "vehicule-active" de tous les éléments ayant la classe "vehicules-img"
                            vehicules.forEach(function (vehicule) {
                                vehicule.classList.remove("vehicule-active");
                            });
                            // Ajoute la classe "vehicule-active" à l'élément cliqué
                            event.currentTarget.classList.add("vehicule-active");

                            let vehiculesModel = vehiculesParent.querySelector('.vehicules-model');
                            let vehiculesYear = vehiculesParent.querySelector('.vehicules-year');
                            let vehiculesKm = vehiculesParent.querySelector('.vehicules-km');
                            let vehiculesDescription = vehiculesParent.querySelector('.vehicules-description');
                            let vehiculesPrice = vehiculesParent.querySelector('.vehicules-price');

                            vehiculeImg.src = event.currentTarget.src;
                            vehiculeModel.innerHTML = vehiculesModel.textContent;
                            vehiculeYear.innerHTML = vehiculesYear.textContent;
                            vehiculeKm.innerHTML = vehiculesKm.textContent;
                            vehiculeDescription.innerHTML = vehiculesDescription.textContent;
                            vehiculePrice.innerHTML = vehiculesPrice.textContent;
                            inputModel.value = vehiculesModel.textContent;
                            inputYear.value = vehiculesYear.textContent;
                            inputKm.value = vehiculesKm.textContent;
                        }

                        // Ajoute un gestionnaire de clic à chaque élément ayant la classe "vehicules-img"
                        vehicules.forEach(function (vehicule) {
                            vehicule.addEventListener("click", setActive);
                        });
                    });
                } else {
                    $("#results").html("<p>Aucun vehicules ne corresponds à vos criteres.</p>");
                }
            }
        });
    });
});

