document.addEventListener('DOMContentLoaded', function() {
    
    const slides = document.querySelectorAll('.avis');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    let currentIndex = Math.floor(slides.length / 2 );

    // Si la nombres de slides est pair mettre le currentIndex a la slide suivante
    if (slides.length % 2 === 0) {
        currentIndex += 0.5;
    }

    // Fonction pour afficher la diapositive actuelle
    function showSlide(index) {
        const slideWidth = slides[0].offsetWidth + 100; // Largeur d'une diapositive
        const middleSlideIndex = Math.floor(slides.length / 2); // Indice de la diapositive du milieu
        const translateX = (middleSlideIndex - index) * slideWidth; // Calcul du déplacement horizontal

        slides.forEach((slide, i) => {
            slide.style.transform = `translateX(${translateX}px)`; // Applique la transformation
        });
    }

    // Initialisation
    showSlide(currentIndex);

    // Gestion des boutons précédent et suivant
    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
    });

    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    });

});