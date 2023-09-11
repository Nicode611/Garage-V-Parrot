// Variables
const carousel = document.querySelector('.avis-caroussel');
const slides = document.querySelectorAll('.avis');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
const slideWidth = slides[0].offsetWidth; // Largeur d'une diapositive
let currentIndex = Math.floor(slides.length / 2); // Commencez au milieu

// Fonction pour afficher la diapositive actuelle
function showSlide(index) {
    const translateX = -index * slideWidth; // Calcul du déplacement horizontal

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


