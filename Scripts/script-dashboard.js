// Affichage des éléments

let sectionServices = document.querySelector('.dashboard-services');
let sectionOccasions = document.querySelector('.dashboard-occasions');
let sectionHoraires = document.querySelector('.dashboard-horaires');
let sectionEmployes = document.querySelector('.dashboard-employes');
let sectionInfos = document.querySelector('.dashboard-infos');
let tabs = document.querySelectorAll(".sidebar-li");

function setActive(event) {
    tabs.forEach(function(tabs) {
        tabs.classList.remove("sidebar-active");
    });

    event.currentTarget.classList.add("sidebar-active");

    if (event.currentTarget.classList.contains("sidebar-services")) {
        sectionServices.classList.remove("hide");
    } else {
        sectionServices.classList.add("hide");
    }

    if (event.currentTarget.classList.contains("sidebar-occasions")) {
        sectionOccasions.classList.remove("hide");
    } else {
        sectionOccasions.classList.add("hide");
    }

    if (event.currentTarget.classList.contains("sidebar-horaires")) {
        sectionHoraires.classList.remove("hide");
    } else {
        sectionHoraires.classList.add("hide");
    }

    if (event.currentTarget.classList.contains("sidebar-employes")) {
        sectionEmployes.classList.remove("hide");
    } else {
        sectionEmployes.classList.add("hide");
    }

    if (event.currentTarget.classList.contains("sidebar-infos")) {
        sectionInfos.classList.remove("hide");
    } else {
        sectionInfos.classList.add("hide");
    }
}

tabs.forEach(function(tabs) {
    tabs.addEventListener('click', setActive)
});

