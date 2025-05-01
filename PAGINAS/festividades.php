<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Festividades del Valle del Mantaro</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../ESTILOS/festividades.css">
</head>
<body>
  <!-- Encabezado con imagen de fondo -->
  <header class="hero">
    <div class="overlay">
      <h1>¡Celebra con nosotros las mejores festividades del Mantaro!</h1>
      <p>Disfruta de la cultura, la música y la tradición.</p>
      <a href="?page=busqueda">
      <button class="btn-primary">Ver Más</button>
      </a>
    </div>
  </header>

  <!-- Sección de festividades -->
  <section class="festividades">
    <h2>Festivades de El Mantaro.</h2>
    <div class="festividad-container" id="festividades-container">
      <!-- 3 iniciales -->
      <div class="festividad-item">
        <a href="?page=busqueda">
        <img src="../IMAGENES/festividad1.png" alt="Carnavales de la Santísima Cruz" />
        </a>
        <h3>Festival del Choclo más Grande y la Humita más Grande de la Región: se celebra el dia 20 y 21 de Abril de cada año.</h3>
        <p>El Mantaro, se desarrolla con la finalidad de promover y fortalecer el desarrollo económico local; implementando las innovaciones tecnológicas y científicas en el campo de la agricultura y ganadería, para el desarrollo sostenible de los mismos, ya que este evento ferial año tras año busca mostrar y potenciar los grandiosos atractivos gastronómicos, agrícolas, ganaderos y turísticos que la “Capital Productora del Choclo” posee en el Valle del Mantaro, y así sus visitantes durante los días 20 y 21 de abril del año en curso, un gran abanico de actividades y eventos artísticos que van desde aquellos tradicionales del distrito como: Concurso del choclo más grande, carrera de estibadores de choclo, etc. hasta el lanzamiento a nivel nacional e internacional de la humita más grande de la Región, degustación de platos típicos en base a cuy, promocionando los sabores y aromas de nuestra tierra, entre otras muestras especiales propias de nuestro distrito.</p>
      </div>  
      <div class="festividad-item">
        <a href="?page=busqueda">
        <img src="../IMAGENES/festividad2.png" alt="Carnavales de la Santísima Cruz" />
        </a>
        <h3>Fiesta de carnavales en Honor a la Santísima Cruz de Espinas.</h3>
        <p>La fiesta patronal en honor a la Santísima Virgen Natividad de Cocharcas, celebrada del 14 al 24 de septiembre, es una de las festividades más importantes del distrito. Durante estos días se organizan misas, procesiones, danzas folclóricas, ferias gastronómicas y actividades sociales que involucran activamente a la comunidad.</p>
      </div>     
    </div>

    <!-- Botón Ver Más -->
    <div class="load-more-wrapper">
      <a href="?page=busqueda">
        <button id="loadMoreBtn" class="btn-primary">VER MÁS</button>
      </a>
    </div>
  </section>

  
  <!-- JavaScript para cargar más y redirigir -->
  <!--<script>
    const festividadesData = [
      { img: '../IMAGENES/festividad4.png', title: 'Señor de Muruhuay', text: 'Procesión y feria tradicional en el centro poblado de Muruhuay.' },
      { img: '../IMAGENES/festividad5.png', title: 'Aniversario de Huancayo', text: 'Conciertos, feria gastronómica y actividades culturales.' },
      { img: '../IMAGENES/festividad6.png', title: 'Semana Turística de Jauja', text: 'Desfiles, música en vivo y degustaciones típicas.' },
      { img: '../IMAGENES/festividad7.png', title: 'Qoyllur Rit’i', text: 'Romería y danzas en honor al Señor de Qoyllur Rit’i.' },
      { img: '../IMAGENES/festividad8.png', title: 'Virgen de Cocharcas', text: 'Peregrinación y veladas folklóricas en Cocharcas.' },
      { img: '../IMAGENES/festividad9.png', title: 'Santísima Cruz de Pomallucay', text: 'Danzas tradicionales y misa solemne en Pomallucay.' }
    ];

    let clickCount = 0;
    const btn = document.getElementById('loadMoreBtn');
    const container = document.getElementById('festividades-container');

    btn.addEventListener('click', () => {
      if (clickCount === 0) {
        // Cargar las 6 festividades extras
        festividadesData.forEach(f => {
          const div = document.createElement('div');
          div.className = 'festividad-item';
          div.innerHTML = `
            <a href="?page=busqueda">
            <img src="${f.img}" alt="${f.title}" />
            </a>
            <h3>${f.title}</h3>
            <p>${f.text}</p>
          `;
          container.appendChild(div);
        });
        clickCount++;
      } else {
        // Redirigir
        window.location.href = '?page=busqueda';
      }
    });
  </script>-->
</body>
</html>
