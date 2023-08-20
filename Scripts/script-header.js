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
    } else {
        accueil.classList.add("none");
    }

    if (currentFileName === "services.php") {
        services.classList.add("active");
    } else {
        services.classList.add("none");
    }

    if (currentFileName === "occasions.php") {
        occasions.classList.add("active");
    } else {
        occasions.classList.add("none");
    }

    if (currentFileName === "contact.php") {
        contact.classList.add("active");
    } else {
        contact.classList.add("none");
    }
});
