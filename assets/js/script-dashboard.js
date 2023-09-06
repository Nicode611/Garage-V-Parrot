document.addEventListener('DOMContentLoaded', function() {
    


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
    let sectionAvis = document.querySelector('.dashboard-avis');
    let sectionContact = document.querySelector('.dashboard-contacts');

    tabs.forEach(function(tab) {
        tab.classList.remove("sidebar-active");
    });
    event.currentTarget.classList.add("sidebar-active");

    
    // localStorage.setItem('activeTab', event.currentTarget.id);
    // const activeTabId = localStorage.getItem('activeTab');

    // if (activeTabId) {
    //     console.log(activeTab);
    //     const activeTab = document.getElementById(activeTabId);
    //     if (activeTab) {
    //         activeTab.classList.add('sidebar-active');
    //         tabs.forEach(function(tab) {
    //             tab.classList.remove("sidebar-active");
    //         });
    //         event.currentTarget.classList.add("sidebar-active");
    //     }
    // }

        

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
    if (sectionAvis) {
        sectionAvis.classList.add("hide");
    }
    if (sectionContact) {
        sectionContact.classList.add("hide");
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
    if (event.currentTarget.classList.contains("sidebar-avis") && sectionAvis) {
        sectionAvis.classList.remove("hide");
    }
    if (event.currentTarget.classList.contains("sidebar-contact") && sectionContact) {
        sectionContact.classList.remove("hide");
    }
}});



// Sidebar hamburger 

document.addEventListener('DOMContentLoaded', function() {
    const sidebarBtn = document.querySelector('.sidebar-btn');
    const sidebarNav = document.querySelector('.sidebar-nav');
    const dashboardOverlay = document.querySelector('.dashboard-overlay');

    sidebarBtn.addEventListener('click', function() {
        sidebarBtn.classList.toggle('open');
        sidebarNav.classList.toggle('open');
        dashboardOverlay.classList.toggle('active');
    });

    dashboardOverlay.addEventListener('click', function() {
        sidebarBtn.classList.remove('open');
        sidebarNav.classList.remove('open');
        dashboardOverlay.classList.remove('active');
    });
});