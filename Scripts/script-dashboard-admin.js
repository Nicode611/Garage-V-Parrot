let sectionServices = document.querySelector('.dashboard-services');
let sectionOccasions = document.querySelector('.dashboard-occasions');
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
}

tabs.forEach(function(tabs) {
    tabs.addEventListener('click', setActive)
});