document.addEventListener("DOMContentLoaded", function () {
    var currentFileName = location.pathname.split("/").slice(-1)[0];

// Récupere les ids
    var accueil = document.querySelector(".accueil");
    var services = document.querySelector(".services");
    var occasions = document.querySelector(".occasions");
    var contact = document.querySelector(".contact");

// Met la classe active à l'element voulu selon la page chargée
    if (currentFileName === "index.php") {
        accueil.classList.add("active");
        services.classList.remove("active");
        occasions.classList.remove("active");
        contact.classList.remove("active");
    }

    if (currentFileName === "services.php") {
        accueil.classList.remove("active");
        services.classList.add("active");
        occasions.classList.remove("active");
        contact.classList.remove("active");
    }

    if (currentFileName === "occasions.php") {
        accueil.classList.remove("active");
        services.classList.remove("active");
        occasions.classList.add("active");
        contact.classList.remove("active");
    } 

    if (currentFileName === "contact.php") {
        accueil.classList.remove("active");
        services.classList.remove("active");
        occasions.classList.remove("active");
        contact.classList.add("active");
    } 
});


// Menu hamburger

document.addEventListener('DOMContentLoaded', function() {
    const menuBtn = document.querySelector('.menu-btn');
    const menu = document.querySelector('.menu');
    const overlay = document.querySelector('.overlay');

    menuBtn.addEventListener('click', function() {
        menuBtn.classList.toggle('open');
        menu.classList.toggle('open');
        overlay.classList.toggle('active');
    });

    overlay.addEventListener('click', function() {
        menuBtn.classList.remove('open');
        menu.classList.remove('open');
        overlay.classList.remove('active');
    });
});

