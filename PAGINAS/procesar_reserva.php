<?php
// 1. Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "jopa");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// 2. Recibir datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$habitaciones = intval($_POST['habitaciones']);
$total = isset($_POST['total']) ? floatval($_POST['total']) : 0;

// 3. Insertar cliente (asumimos que es uno nuevo siempre, puedes mejorarlo con verificación futura)
$sql_cliente = "INSERT INTO clientes (nombre_completo, correo, telefono)
                VALUES ('$nombre', '$correo', '$telefono')";

if ($conexion->query($sql_cliente) === TRUE) {
    $id_cliente = $conexion->insert_id;

    // 4. Insertar la reserva
    $sql_reserva = "INSERT INTO reservas (id_cliente, fecha_entrada, fecha_salida, total)
                    VALUES ($id_cliente, '$check_in', '$check_out', $total)";

    if ($conexion->query($sql_reserva) === TRUE) {
        $id_reserva = $conexion->insert_id;

        // 5. Asignar habitaciones (de momento ficticias: las primeras disponibles)
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

        // Al final del archivo, reemplaza TODOS los "echo" por esto:
        header("Location: ../paginas/index.php?page=hospedaje?mensaje=Reserva realizada con éxito&tipo=success");
        exit();
        } else {
            header("Location: ../hospedaje.php?mensaje=No hay suficientes habitaciones disponibles");
            exit();
                    }
    } else {
        header("Location: ../hospedaje.php?mensaje=Error al registrar la reserva&tipo=error");
        exit();
            }
} else {
    header("Location: ../hospedaje.php?mensaje=Error al registrar la reserva&tipo=error");
    exit();
    }

$conexion->close();
?>
