<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'index'; // Obtenemos la página de la URL o 'index' si no se pasa la variable.
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>El Mantaro Mágico</title>
  <link rel="stylesheet" href="../ESTILOS/index.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  <!-- MENÚ -->
  <nav class="main-nav">
    <a href="?page=index">Inicio</a>
    <a href="?page=atractivos">Atractivos</a>
    <a href="?page=gastronomia">Gastronomía</a>
    <a href="?page=festividades">Festividades</a>
    <a href="?page=hospedaje">Hospedaje</a>
  </nav>

  <!-- CONTENIDO DINÁMICO -->
  <div id="page-content">
    <?php
      if ($page == 'index') {
        // Página de Inicio
        echo '
        <header class="hero">
          <div class="overlay">
            <h1>¡Descubre El Mantaro Mágico!</h1>
            <p>Tradiciones, paisajes, danza y sabor que encantan !!</p>
          </div>
        </header>

        <section class="categorias">
          <h2 class="categorias-titulo">Cada experiencia tiene una riqueza escondida ¡Encuéntrala!</h2>
          <div class="categorias-menu">
            <div class="categoria-item active" data-categoria="cultural">
              <img src="../IMAGENES/historia.png" alt="Cultural">
              <p>HISTÓRICO CULTURAL</p>
            </div>
            <div class="categoria-item" data-categoria="aventura">
              <img src="../IMAGENES/aventura.png" alt="Aventura">
              <p>AVENTURA</p>
            </div>
            <div class="categoria-item" data-categoria="naturaleza">
              <img src="../IMAGENES/naturaleza.png" alt="Naturaleza">
              <p>NATURALEZA</p>
            </div>
            <div class="categoria-item" data-categoria="gastronomia">
              <img src="../IMAGENES/gastronomia.png" alt="Gastronomía">
              <p>GASTRONOMÍA</p>
            </div>
            <div class="categoria-item" data-categoria="vivencial">
              <img src="../IMAGENES/vivencial.png" alt="Vivencial">
              <p>VIVENCIAL</p>
            </div>
            <div class="categoria-item" data-categoria="entretenimiento">
              <img src="../IMAGENES/entretenimiento.png" alt="Entretenimiento">
              <p>ENTRETENIMIENTO</p>
            </div>            
          </div>  
          <div id="contenido-categoria" class="contenido-dinamico">
            <h3>Histórico Cultural</h3>
            <p>Explora la historia viva del Mantaro: danzas ancestrales, templos coloniales, y cultura en cada rincón.</p>
          </div>
        </section>        

        <section class="mapa">
          <div class="mapa-contenido">
            <div class="mapa-texto">
              <h2>Ubicación - Distrito de El Mantaro</h2>
              <p>Descubre la magia del Valle del Mantaro, donde la historia, cultura y naturaleza se unen en un paisaje único. Explora uno de los destinos más vibrantes del Perú.</p>
              <a href="https://youtu.be/c40waO_P3yc?t=12">
              <button class="btn-vermas" style="max-width:60%;">ACERCA DEL MANTARO ➤</button>
              </a>
              </div>
            <div class="mapa-contenedor">
              <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=-75.493438,-11.902054,-75.283926,-11.725237" width="100%" height="400" frameborder="0"></iframe>
            </div>    
          </div>
        </section>
        ';
      } 
      elseif ($page == 'atractivos') {
        include('../PAGINAS/atractivos.php');  // Incluye el archivo 'atractivos.php' solo si la página es 'atractivos'
      }
      elseif ($page == 'gastronomia') {
        // Aquí colocarías el contenido de la página "Gastronomía"
        include('../PAGINAS/gastronomia.php');  // Incluye el archivo 'atractivos.php' solo si la página es 'atractivos'
      }
      elseif ($page == 'festividades') {
        // Aquí colocarías el contenido de la página "Gastronomía"
        include('../PAGINAS/festividades.php');  // Incluye el archivo 'atractivos.php' solo si la página es 'atractivos'
      }elseif ($page == 'hospedaje') {
        // Aquí colocarías el contenido de la página "Gastronomía"
        include('../PAGINAS/hospedaje.php');  // Incluye el archivo 'atractivos.php' solo si la página es 'atractivos'
      } 
      elseif ($page == 'busqueda') {
        include('../PAGINAS/busqueda.php');  // Incluye el archivo 'atractivos.php' solo si la página es 'atractivos'
      } 
      elseif ($page == 'bici') {
        include('../PAGINAS/bici.php');  // Incluye el archivo 'atractivos.php' solo si la página es 'atractivos'
      } 
      elseif ($page == 'lugares') {
        include('../PAGINAS/lugares.php');  // Incluye el archivo 'atractivos.php' solo si la página es 'atractivos'
      }
      elseif ($page == 'lugares1') {
        include('../PAGINAS/lugares1.php');  // Incluye el archivo 'atractivos.php' solo si la página es 'atractivos'
      }
      elseif ($page == 'lugares2') {
        include('../PAGINAS/lugares2.php');  // Incluye el archivo 'atractivos.php' solo si la página es 'atractivos'
      }
      elseif ($page == 'lugares3') {
        include('../PAGINAS/lugares3.php');  // Incluye el archivo 'atractivos.php' solo si la página es 'atractivos'
      } 
      elseif ($page == 'lugares4') {
        include('../PAGINAS/lugares4.php');  // Incluye el archivo 'atractivos.php' solo si la página es 'atractivos'
      } 
      elseif ($page == 'lugares5') {
        include('../PAGINAS/lugares5.php');  // Incluye el archivo 'atractivos.php' solo si la página es 'atractivos'
      } ?>
  </div>

<footer>
  <div class="footer-container">
    <div class="footer-left">
      <p>©2025 El Mantaro Mágico - Amor por nuestra tierra</p>
      <p>Síguenos: Facebook | Instagram | TikTok</p>
    </div>
    <div class="footer-right">
      <p>Encuéntranos en:</p>
      <a href="https://www.instagram.com" target="_blank">Instagram</a> |
      <a href="https://www.twitter.com" target="_blank">Twitter</a> |
      <a href="https://www.facebook.com/municipalidaddistritalelmantaro" target="_blank">Facebook</a> |
      <a href="https://www.youtube.com" target="_blank">YouTube</a>
    </div>
    <div class="footer-awards">
      <img src="../IMAGENES/instagram.png" alt="Award 1">
      <img src="../IMAGENES/twitter.png" alt="Award 2">
      <img src="../IMAGENES/facebook.png" alt="Award 3">
      <img src="../IMAGENES/youtube.png" alt="Award 4">
    </div>
    <div class="footer-bottom">
      <p>@Derechos de autor reservados D'Nano Hackers Schools</p>
      <p><a href="https://www.facebook.com/profile.php?id=100085624143783" target="_blank">www.D'NanoHackersSchool.com</a></p>
      <p>Términos y condiciones | Aviso de privacidad</p>
    </div>
  </div>
</footer>
<script src="../JS/fondo_back.js"></script>
  <script>
    //PARA QUE EL MENU CAMBIE DE COLOR SU FONDO
    window.addEventListener('scroll', function () {
      const nav = document.querySelector('.main-nav');
      if (window.scrollY > 5) {
        nav.classList.add('scrolled');
      } else {
        nav.classList.remove('scrolled');
      }
    });

    //CODIGO SCRIPT PARA MOSTRAR LOS DATOS DE LAS CATEGORIAS
    const items = document.querySelectorAll('.categoria-item');
    const contenido = document.getElementById('contenido-categoria');

    const textos = {
            cultural: `
                <div class="bloque-dinamico" style="background-image: url('../IMAGENES/fondo-cultural.jpg');">
                <div class="contenido-cabecera">
                    <h2>Histórico Cultural</h2>
                    <p>El distrito fue creado mediante Ley N° 4404 del 23 de noviembre de 1921, en el gobierno del Presidente Augusto B. Leguía. Tenía en la fecha de su creación una extensión superficial de 17,76 km² y una población aproximada de 2 700 habitantes.
                    Origen del término Mantaro (Pucucho) "Mantaro" se ha tomado en alusión al río que riega sus territorios de norte a sur por el extremo occidental y que le sirve de límite con el vecino distrito de Leonor Ordóñez, antiguamente conocido como Huancaní (a veces tenemos vergüenza de utilizar el idioma de nuestros antepasados). La diferencia: se le dio género masculino anteponiendo el artículo el - EL MANTARO. La etimología del término "Mantaro" deriva de la palabra quechua “MANTA” que significa prenda suelta de lana o algodón de forma rectangular que sirve para abrigarse, también utilizada por las mujeres para cargar a sus hijos o llevar a sus equipajes. Expresando metafóricamente como el abrigo que se extiende en las faldas del río para brindarle refugio para que puedas reposar o sentarte en sus cálidas tierras y respirar de su aire puro y saludable. Pucucho palabra quechua formada por las voces “PU” y “KUCHO” que significa: dale con la esquina. Ya que geográficamente la población está enclavada en el vértice del ángulo que forman los cerros en "Huacho esquina", cuyos lados lo conforman dos pequeñas cadenas de cerros que se desprenden de la cordillera oriental. Como son: Cerro Huayunca, Cerro Pohualtaco, Cerro Tambo, Cerro Condorhuaca, Cerro Auripampa, Cerro Alvinopampa, Cerro Chonta, Cerro Huacahuasi, y las ruinas de Sichriacuto ubicado en el paraje de Sillahuajta.</p>
                    
                </div>
                
                </div>
            `,

            aventura: `
                <div class="bloque-dinamico" style="background-image: url('../IMAGENES/fondo-aventura.jpg');">
                <div class="contenido-cabecera">
                    <h2>Aventura</h2>
                    <p>Desde rafting por ríos bravos hasta parapente sobre valles infinitos. La adrenalina no falta en el <strong>Mantaro</strong>.</p>
                    <a href="?page=bici">
                    <button class="btn-vermas">VER MÁS</button>
                    </a>

                </div>
                <div class="tarjetas">
                    <div class="tarjeta">
                    <a href="?page=bici">
                    <img src="../IMAGENES/trekking.jpg" alt="Trekking">
                    <h4>Ruta Trekking Andino</h4>
                    <p>Caminatas por paisajes de otro mundo</p>
                    </div>
                    
                    <div class="tarjeta">
                    <a href="?page=bici">
                    <img src="../IMAGENES/bici.jpg" alt="Bicicleta">
                    </a>
                    <h4>Ruta Downhill</h4>
                    <p>Explora el valle en dos ruedas</p>
                    </div>
                </div>
                </div>
            `,

            naturaleza: `
                <div class="bloque-dinamico" style="background-image: url('../IMAGENES/fondo-naturaleza.png');">
                <div class="contenido-cabecera">
                    <h2>Naturaleza</h2>
                    <p>Valles verdes, cielos despejados y una flora que parece salida de un sueño. Así es el <strong>del Mantaro</strong> natural.</p>
                    
                </div>
                <div class="tarjetas">
                    <div class="tarjeta">
                    <img src="../IMAGENES/valles.png" alt="Valle">
                    <h4>Valle del Mantaro</h4>
                    <p>Un paraíso de biodiversidad</p>
                    </div>
                    <div class="tarjeta">
                    <img src="../IMAGENES/rio.png" alt="Río">
                    <h4>Río Mantaro</h4>
                    <p>El río que alimenta la vida del valle</p>
                    </div>
                    <div class="tarjeta">
                    <img src="../IMAGENES/paisaje.jpg" alt="Paisaje">
                    <h4>Cordillera Huaytapallana</h4>
                    <p>Postales naturales que encantan</p>
                    </div>
                </div>
                </div>
            `,

            gastronomia: `
                <div class="bloque-dinamico" style="background-image: url('../IMAGENES/fondo-gastronomia.jpg');">
                <div class="contenido-cabecera">
                    <h2>Gastronomía</h2>
                    <p>Sabores que cuentan historias: pachamanca, cuy, papas nativas y mucho más. Todo el sazón ancestral del <strong>Mantaro</strong> en tu paladar.</p>
                    
                </div>
                <div class="tarjetas">
                    <div class="tarjeta">
                    <img src="../IMAGENES/pachamanca.png" alt="Pachamanca">
                    <h4>Pachamanca</h4>
                    <p>Una ceremonia de sabor</p>
                    </div>
                    <div class="tarjeta">
                    <img src="../IMAGENES/cuy.jpg" alt="Cuy">
                    <h4>Cuy Chactado</h4>
                    <p>Delicia tradicional andina</p>
                    </div>
                    <div class="tarjeta">
                    <img src="../IMAGENES/queso.jpg" alt="Queso">
                    <h4>Queso Andino</h4>
                    <p>Sabores lácteos de altura</p>
                    </div>
                    <div class="tarjeta">
                    <img src="../IMAGENES/Patasca.png" alt="Pachamanca">
                    <h4>Patasca</h4>
                    <p>Sopa nutritiva</p>
                    </div>
                    <div class="tarjeta">
                    <img src="../IMAGENES/jora.png" alt="Pachamanca">
                    <h4>Chicha de Jora</h4>
                    <p>Bebida que te encantara</p>
                    </div>
                    <div class="tarjeta">
                    <img src="../IMAGENES/trucha.png" alt="Pachamanca">
                    <h4>Trucha frita</h4>
                    <p>Manjar de los dioses</p>
                    </div>
                </div>
                </div>
            `,

            vivencial: `
                <div class="bloque-dinamico" style="background-image: url('../IMAGENES/fondo-vivencial.png');">
                <div class="contenido-cabecera">
                    <h2>Vivencial</h2>
                    <p>Convive con comunidades del <strong>Distrito del Mantaro</strong>, participa en sus labores diarias y aprende de sus costumbres ancestrales.</p>
                    
                </div>
                <div class="tarjetas">
                    <div class="tarjeta">
                    <img src="../IMAGENES/artesania.jpg" alt="Artesanía">
                    <h4>Jornada Artesanal</h4>
                    <p>Tejido, cerámica y cultura viva</p>
                    </div>
                    <div class="tarjeta">
                    <img src="../IMAGENES/agricultura.jpg" alt="Agricultura">
                    <h4>Experiencia Agrícola</h4>
                    <p>Siembra, cosecha y gratitud</p>
                    </div>
                    <div class="tarjeta">
                    <img src="../IMAGENES/campesino.jpg" alt="Campesino">
                    <h4>Vida Campesina</h4>
                    <p>Aprende del día a día rural</p>
                    </div>
                </div>
                </div>
            `,

            entretenimiento: `
                <div class="bloque-dinamico" style="background-image: url('../IMAGENES/fondo-entretenimiento.png');">
                <div class="contenido-cabecera">
                    <h2>Entretenimiento</h2>
                    <p>Ferias, festivales, danzas y música que celebran la identidad viva del <strong>Valle del Mantaro</strong>.</p>
                    <a href="?page=busqueda">
                    <button class="btn-vermas">VER MÁS</button>
                    </a>
                </div>
                <div class="tarjetas">
                    <div class="tarjeta">
                    <a href="?page=busqueda">
                    <img src="../IMAGENES/danza.jpg" alt="Danza">
                    </a>
                    <h4>Danza Típica</h4>
                    <p>Folclore que emociona</p>
                    </div>
                    <div class="tarjeta">
                    <a href="?page=busqueda">
                    <img src="../IMAGENES/festival.jpg" alt="Festival">
                    </a>
                    <h4>Festival del Valle</h4>
                    <p>Celebración a lo grande</p>
                    </div>
                    <div class="tarjeta">
                    <a href="?page=busqueda">
                    <img src="../IMAGENES/musica.jpg" alt="Música">
                    </a>
                    <h4>Concierto Regional</h4>
                    <p>Ritmo y alegría andina</p>
                    </div>
                </div>
                </div>              
            `
        };

        items.forEach(item => {
        item.addEventListener('click', () => {
        items.forEach(i => i.classList.remove('active'));
        item.classList.add('active');

        const categoria = item.getAttribute('data-categoria');
        contenido.innerHTML = textos[categoria];
        });
    });
  </script>
</body>
</html>
