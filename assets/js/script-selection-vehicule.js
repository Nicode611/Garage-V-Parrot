


  $(document).ready(function () {

    let priceRange = document.getElementById("price");
    let priceValue = document.getElementById("price-value");

    priceRange.addEventListener("input", function () {
      // Mettez à jour le texte avec la valeur actuelle du curseur
      priceValue.textContent = priceRange.value + " €";
  });

    // Lorsque le bouton "Appliquer le filtre" est cliqué
    $("#filter").click(function () {
      console.log('hello');
        // Récupérer les valeurs du formulaire
        var price = $("#price").val();
        var year = $("#year").val();
        var km = $("#km").val();

        // Envoyer les données au serveur via AJAX
        $.ajax({
            type: "POST",
            url: "../scripts/submit/test.php", // Remplacez par le chemin de votre script PHP
            data: { price: price, year: year, km: km },
            dataType: "json",
            success: function (data) {
                // Mettre à jour la section des résultats avec les données renvoyées par le serveur
                $("#results").empty();

                if (Array.isArray(data)) {
                $.each(data, function (index, vehicle) {
                  var html = '<div class="vehicules">';
                  html += '<img class="vehicules-img" src="../assets/images/images-vehicules/' + vehicle.image + '">';
                  html += '<div class="hided-infos" style="display: none;">';
                  html += '<span class="vehicules-model">' + vehicle.model + '</span>';
                  html += '<span class="vehicules-infos vehicules-year">' + vehicle.year + '</span>';
                  html += '<span class="vehicules-infos vehicules-km">' + vehicle.kilometrage + ' km</span>';
                  html += '<span class="vehicules-description">' + vehicle.description + '</span>';
                  html += '<span class="vehicules-price">' + vehicle.price + ' €</span>';
                  html += '</div>';
                  html += '</div>';
      
                  // Ajoutez le HTML généré à la section des résultats
                  $("#results").append(html);
                  
                });
                let vehicules = document.querySelectorAll(".vehicules-img");
                let prevBtn = document.querySelector("#prevButton");
                let nextBtn = document.querySelector("#nextButton");
                let currentIndex = 0; // Pour suivre l'index de l'élément actif



                function setActive(event) {
                  console.log('click');
                  let vehiculesParent = event.currentTarget.closest('.vehicules');
                  let vehiculeImg = document.querySelector(".vehicule-img");
                  let vehiculeModel = document.querySelector('.vehicule-model');
                  let vehiculeYear = document.querySelector('.vehicule-year');
                  let vehiculeKm = document.querySelector('.vehicule-km');
                  let vehiculeDescription = document.querySelector('.vehicule-description');
                  let vehiculePrice = document.querySelector('.vehicule-price');
                  let vehiculeCard = document.querySelector('.vehicule-card')

                  vehiculeCard.classList.remove("hide");
                  vehiculeCard.classList.add("show");

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
              } else {console.error("Les données renvoyées ne sont pas un tableau JSON valide.");}
            }
        });
    });
});
  
