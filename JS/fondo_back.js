// JavaScript para cambiar el fondo del header dinámicamente
window.addEventListener('load', function () {
    // Obtén el nombre de la página desde la URL (puede ser 'index', 'atractivos', etc.)
    const page = new URLSearchParams(window.location.search).get('page') || 'index';
  
    // Elige la imagen correspondiente al fondo según la página
    let headerImage = '';
    
    switch (page) {
      case 'atractivos':
        headerImage = '../IMAGENES/atractivos.jpg';
        break;
      case 'hospedaje':
        headerImage = '../IMAGENES/hospedaje.png';
        break;
      case 'gastronomia':
        headerImage = '../IMAGENES/gastro.png';
        break;
      case 'festividades':
        headerImage = '../IMAGENES/portada1.png';
        break;
      default:
        headerImage = '../IMAGENES/portada.png'; // Imagen por defecto para 'index'
    }
  
    // Cambia el fondo del header usando la imagen seleccionada
    const heroHeader = document.querySelector('.hero');
    if (heroHeader) {
      heroHeader.style.background = `url('${headerImage}') no-repeat center center/cover`;
    }
  });
  