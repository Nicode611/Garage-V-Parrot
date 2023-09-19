let vehicules = document.querySelectorAll(".vehicules-img");
let prevBtn = document.querySelector("#prevButton");
let nextBtn = document.querySelector("#nextButton");
let currentIndex = 0;

function setActive(event) {
    let vehiculesParent = event.currentTarget.closest('.vehicules');
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

function moveToNext() {
    currentIndex = (currentIndex + 1) % vehicules.length;
    setActive({ currentTarget: vehicules[currentIndex] });
}

function moveToPrev() {
    currentIndex = (currentIndex - 1 + vehicules.length) % vehicules.length;
    setActive({ currentTarget: vehicules[currentIndex] });
}

// Ajoute un gestionnaire de clic à chaque élément ayant la classe "vehicules-img"
vehicules.forEach(function (vehicule) {
    vehicule.addEventListener("click", setActive);
});

// Ajoute des gestionnaires de clic pour les boutons "prev" et "next"
prevBtn.addEventListener("click", moveToPrev);
nextBtn.addEventListener("click", moveToNext);
