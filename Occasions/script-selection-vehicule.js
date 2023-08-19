let vehicules = document.querySelectorAll(".vehicules-img");
let vehiculeImg = document.querySelector(".vehicule-img");

function setActive(event) {
    // Supprime la classe "vehicule-active" de tous les éléments ayant la classe "vehicules-img"
    vehicules.forEach(function(vehicule) {
        vehicule.classList.remove("vehicule-active");
    });

    // Ajoute la classe "vehicule-active" à l'élément cliqué
    event.currentTarget.classList.add("vehicule-active");
    vehiculeImg.src = event.currentTarget.src;
}

// Ajoute un gestionnaire de clic à chaque élément ayant la classe "vehicules-img"
vehicules.forEach(function(vehicule) {
    vehicule.addEventListener("click", setActive);
});

