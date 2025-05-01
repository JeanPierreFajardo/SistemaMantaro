<?php
// Inicializamos la variable de mensaje
$mensaje = '';
$tipoMensaje = '';

// Verificamos si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 1. Conexión a la base de datos
    $conexion = new mysqli("localhost", "root", "", "jopa");

    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    // 2. Comprobamos si los datos existen
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
    $check_in = isset($_POST['check_in']) ? $_POST['check_in'] : '';
    $check_out = isset($_POST['check_out']) ? $_POST['check_out'] : '';
    $habitaciones = isset($_POST['habitaciones']) ? intval($_POST['habitaciones']) : 0;
    $total = isset($_POST['total']) ? floatval($_POST['total']) : 0;

    // 3. Insertar cliente
    $sql_cliente = "INSERT INTO clientes (nombre_completo, correo, telefono)
                    VALUES ('$nombre', '$correo', '$telefono')";

    if ($conexion->query($sql_cliente) === TRUE) {
        $id_cliente = $conexion->insert_id;

        // 4. Insertar la reserva
        $sql_reserva = "INSERT INTO reservas (id_cliente, fecha_entrada, fecha_salida, total)
                        VALUES ($id_cliente, '$check_in', '$check_out', $total)";

        if ($conexion->query($sql_reserva) === TRUE) {
            $id_reserva = $conexion->insert_id;

            // 5. Asignar habitaciones
            $sql_habitaciones_disponibles = "SELECT id_habitacion FROM habitaciones WHERE estado = 'disponible' LIMIT $habitaciones";
            $resultado = $conexion->query($sql_habitaciones_disponibles);

            if ($resultado->num_rows >= $habitaciones) {
                while ($fila = $resultado->fetch_assoc()) {
                    $id_habitacion = $fila['id_habitacion'];

                    // Insertar en reserva_habitaciones
                    $conexion->query("INSERT INTO reserva_habitaciones (id_reserva, id_habitacion)
                                      VALUES ($id_reserva, $id_habitacion)");

                    // Marcar habitación como ocupada
                    $conexion->query("UPDATE habitaciones SET estado = 'ocupada' WHERE id_habitacion = $id_habitacion");
                }

                $mensaje = "✅ Reserva realizada con éxito.";
                $tipoMensaje = "success";
            } else {
                $mensaje = "❌ No hay suficientes habitaciones disponibles.";
                $tipoMensaje = "error";
            }
        } else {
            $mensaje = "❌ Error al registrar la reserva: " . $conexion->error;
            $tipoMensaje = "error";
        }
    } else {
        $mensaje = "❌ Error al registrar al cliente: " . $conexion->error;
        $tipoMensaje = "error";
    }

    $conexion->close();
}
?>

<?php if (!empty($mensaje)): ?>
  <div class="alert <?= $tipoMensaje === 'success' ? 'alert-success' : 'alert-error' ?>">
    <?= htmlspecialchars($mensaje) ?>
  </div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hospedaje ZY - Reserva tu Estancia</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../ESTILOS/hospedaje.css">
</head>
<body>
  <!-- Encabezado con imagen de fondo -->
  <header class="hero">
    <div class="overlay">
      <h1>Hospedaje ZY</h1>
      <p>Tu hogar lejos de casa en la Plaza de Armas de El Mantaro</p>
    </div>
  </header>

  <!-- Sección de información de hospedaje -->
  <section class="hospedaje-info">
    <div class="hospedaje-details">
      <div class="image-gallery">
        <div class="image-slider">
            <img src="../IMAGENES/imagen1.png" alt="Habitación" />
            <img src="../IMAGENES/imagen2.png" alt="Habitación" />
            <img src="../IMAGENES/imagen5.png" alt="Vista exterior" />
            <img src="../IMAGENES/imagen4.png" alt="Vista exterior" />
            <img src="../IMAGENES/imagen3.png" alt="Vista exterior" />
            <img src="../IMAGENES/imagen6.png" alt="Vista exterior" />
        </div>
      </div>
      <div class="description">
        <h2>Ubicación</h2>
        <p>Hospedaje ZY está ubicado en el corazón de la Plaza de Armas de El Mantaro, rodeado de la belleza natural y cultural de la región.</p>
        <h3>Dirección:</h3>
        <p>Plaza de Armas, El Mantaro, Perú</p>
      </div>
    </div>
  </section>

  <!-- Sección de servicios -->
  <section class="servicios">
    <h2>Servicios Disponibles</h2>
    <div class="servicios-container">
      <div class="servicio-item">
        <img src="../IMAGENES/wifi.png" alt="Wi-Fi" />
        <h3>Wi-Fi Gratis</h3>
      </div>
      <div class="servicio-item">
        <img src="../IMAGENES/desayuno.png" alt="Desayuno" />
        <h3>Desayuno Incluido</h3>
      </div>
      <div class="servicio-item">
        <img src="../IMAGENES/parking.png" alt="Parqueo" />
        <h3>Parqueo Seguro</h3>
      </div>
      <div class="servicio-item">
        <img src="../IMAGENES/television.png" alt="TV" />
        <h3>TV por Cable</h3>
      </div>
    </div>
  </section>


  <!-- Sección de reserva -->
  <section class="reserva">
    <h2>Realiza tu Reserva</h2>
    <form action="?page=hospedaje" method="POST">
      <!-- Datos del Cliente -->
      <div class="form-group">
        <label for="nombre">Nombre Completo</label>
        <input type="text" id="nombre" name="nombre" required />
      </div>
      <div class="form-group">
        <label for="correo">Correo Electrónico</label>
        <input type="email" id="correo" name="correo" required />
      </div>
      <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input type="text" id="telefono" name="telefono" required />
      </div>

      <!-- Fechas -->
      <div class="form-group">
        <label for="check-in">Fecha de Entrada</label>
        <input type="date" id="check-in" name="check_in" required />
      </div>
      <div class="form-group">
        <label for="check-out">Fecha de Salida</label>
        <input type="date" id="check-out" name="check_out" required />
      </div>

      <!-- Habitaciones -->
      <div class="form-group">
        <label for="tipo_habitacion">Tipo de Habitación</label>
        <select id="tipo_habitacion" name="tipo_habitacion" required>
          <option value="simple" data-precio="100">Simple (S/100)</option>
          <option value="doble" data-precio="110">Doble (S/110)</option>
          <option value="matrimonial" data-precio="60">Matrimonial (S/60)</option>
        </select>
      </div>

      <div class="form-group">
        <label for="habitaciones">Número de Habitaciones</label>
        <select id="habitaciones" name="habitaciones">
          <option value="1">1 habitación</option>
          <option value="2">2 habitaciones</option>
          <option value="3">3 habitaciones</option>
        </select>
      </div>

      <div class="form-group">
        <label for="total">Total a pagar (S/):</label>
        <input type="text" id="total" name="total" readonly />
      </div>

      <button type="submit" class="btn-primary">Confirmar Reserva</button>
    </form>
  </section>

  <script src="../JS/carrusel.js"></script>
  <script>
    const checkIn = document.getElementById("check-in");
    const checkOut = document.getElementById("check-out");
    const habitaciones = document.getElementById("habitaciones");
    const tipoHabitacion = document.getElementById("tipo_habitacion");
    const totalInput = document.getElementById("total");

    function calcularTotal() {
      const entrada = new Date(checkIn.value);
      const salida = new Date(checkOut.value);
      const numHab = parseInt(habitaciones.value);
      const precio = parseFloat(tipoHabitacion.options[tipoHabitacion.selectedIndex].dataset.precio);

      if (checkIn.value && checkOut.value && salida > entrada) {
        const diffTime = Math.abs(salida - entrada);
        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
        const total = diffDays * numHab * precio;
        totalInput.value = total.toFixed(2);
      } else {
        totalInput.value = "";
      }
    }

    checkIn.addEventListener("change", calcularTotal);
    checkOut.addEventListener("change", calcularTotal);
    habitaciones.addEventListener("change", calcularTotal);
    tipoHabitacion.addEventListener("change", calcularTotal);
  </script>

</body>
</html>
