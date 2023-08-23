document.addEventListener("DOMContentLoaded", function () {
    var currentFileName = location.pathname.split("/").slice(-1)[0];

// Récupere les ids
    var accueil = document.getElementById("accueil");
    var services = document.getElementById("services");
    var occasions = document.getElementById("occasions");
    var contact = document.getElementById("contact");

// Met la classe active à l'element voulu selon la page chargée
    if (currentFileName === "index.php") {
        accueil.classList.add("active");
        services.classList.remove("active");
        occasions.classList.remove("active");
        contact.classList.remove("active");
        console.log('fait');
    }

    if (currentFileName === "services.php") {
        accueil.classList.remove("active");
        services.classList.add("active");
        occasions.classList.remove("active");
        contact.classList.remove("active");
        console.log('fait');
    }

    if (currentFileName === "occasions.php") {
        accueil.classList.remove("active");
        services.classList.remove("active");
        occasions.classList.add("active");
        contact.classList.remove("active");
        console.log('fait');
    } 

    if (currentFileName === "contact.php") {
        accueil.classList.remove("active");
        services.classList.remove("active");
        occasions.classList.remove("active");
        contact.classList.add("active");
        console.log('fait');
    } 
});

