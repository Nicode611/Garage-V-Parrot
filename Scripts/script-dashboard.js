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

    // Vérifie si les sections existent puis les cachent
    if (sectionServices) {
        sectionServices.classList.add("hide");
    }
    if (sectionOccasions) {
        sectionOccasions.classList.add("hide");
    }
    if (sectionHoraires) {
        sectionHoraires.classList.add("hide");
    }
    if (sectionEmployes) {
        sectionEmployes.classList.add("hide");
    }
    if (sectionInfos) {
        sectionInfos.classList.add("hide");
    }

    // Affiche les sections
    if (event.currentTarget.classList.contains("sidebar-services") && sectionServices) {
        sectionServices.classList.remove("hide");
    }

    if (event.currentTarget.classList.contains("sidebar-occasions") && sectionOccasions) {
        sectionOccasions.classList.remove("hide");
    }

    if (event.currentTarget.classList.contains("sidebar-horaires") && sectionHoraires) {
        sectionHoraires.classList.remove("hide");
    }

    if (event.currentTarget.classList.contains("sidebar-employes") && sectionEmployes) {
        sectionEmployes.classList.remove("hide");
    }

    if (event.currentTarget.classList.contains("sidebar-infos") && sectionInfos) {
        sectionInfos.classList.remove("hide");
    }
}

tabs.forEach(function(tabs) {
    tabs.addEventListener('click', setActive);
});
