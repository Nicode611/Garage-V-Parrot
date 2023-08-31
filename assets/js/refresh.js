let formButton = document.querySelector(".service-submit");


formButton.addEventListener('click', function(delayInSeconds) {
    setTimeout(function () {
        location.reload();
        }, delayInSeconds * 1000); // Le délai est en millisecondes, donc on multiplie par 1000 pour obtenir des secondes
    });