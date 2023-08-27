let tabs = document.querySelectorAll(".sidebar-li");

tabs.forEach(function(tab) {
    tab.addEventListener('click', setActive);
});

function setActive(event) {
    let sectionServices = document.querySelector('.dashboard-services');
    let sectionOccasions = document.querySelector('.dashboard-occasions');
    let sectionHoraires = document.querySelector('.dashboard-horaires');
    let sectionEmployes = document.querySelector('.dashboard-employes');
    let sectionInfos = document.querySelector('.dashboard-infos');

    tabs.forEach(function(tab) {
        tab.classList.remove("sidebar-active");
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
        console.log("La fonction setActive a été appelée.");
        sectionHoraires.classList.remove("hide");
    }

    if (event.currentTarget.classList.contains("sidebar-employes") && sectionEmployes) {
        sectionEmployes.classList.remove("hide");
    }

    if (event.currentTarget.classList.contains("sidebar-infos") && sectionInfos) {
        console.log("La fonction setActive a été appelée.");
        sectionInfos.classList.remove("hide");
    }
}



// Sidebar hamburger 

document.addEventListener('DOMContentLoaded', function() {
    const sidebarBtn = document.querySelector('.sidebar-btn');
    const sidebarNav = document.querySelector('.sidebar-nav');
    const dashboardOverlay = document.querySelector('.dashboard-overlay');

    sidebarBtn.addEventListener('click', function() {
        console.log('fait');
        sidebarBtn.classList.toggle('open');
        sidebarNav.classList.toggle('open');
        dashboardOverlay.classList.toggle('active');
    });

    dashboardOverlay.addEventListener('click', function() {
        console.log('overlay');
        sidebarBtn.classList.remove('open');
        sidebarNav.classList.remove('open');
        dashboardOverlay.classList.remove('active');
    });
});