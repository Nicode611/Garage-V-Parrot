document.addEventListener("DOMContentLoaded", function () {



let vehicules = document.querySelectorAll(".vehicules-img");
let prevBtn = document.querrySelector("#prevButton");
let nextBtn = document.querrySelector("#nextButton");

function setActive(event) {
    let vehiculesParent = event.currentTarget.closest('.vehicules'); // Déplacer cette ligne ici
    let vehiculeImg = document.querySelector(".vehicule-img");
    let vehiculeModel = document.querySelector('.vehicule-model');
    let vehiculeYear = document.querySelector('.vehicule-year');
    let vehiculeKm = document.querySelector('.vehicule-km');
    let vehiculeDescription = document.querySelector('.vehicule-description');
    let vehiculePrice = document.querySelector('.vehicule-price');

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
}

// Ajoute un gestionnaire de clic à chaque élément ayant la classe "vehicules-img"
vehicules.forEach(function (vehicule) {
    vehicule.addEventListener("click", setActive);
});

});
