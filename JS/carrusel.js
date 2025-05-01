let currentIndex = 0;
const slides = document.querySelectorAll('.image-slider .slide');
const totalSlides = slides.length;

function changeImage() {
  currentIndex = (currentIndex + 1) % totalSlides;
  const offset = -currentIndex * 100;
  document.querySelector('.image-slider').style.transform = `translateX(${offset}%)`;
}

// Cambiar imagen cada 2 segundos
setInterval(changeImage, 2000); // Cambia la imagen cada 2 segundos
