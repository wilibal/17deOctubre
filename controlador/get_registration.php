<?php
include "../modelo/conexion.php";
session_start();

if (!isset($_SESSION["idusuario"])) {
    echo json_encode(['status' => 'error', 'message' => 'No se ha iniciado sesión.']);
    exit;
}

$usuario_id = $_SESSION["idusuario"];

if ($db_connection->connect_error) {
    echo json_encode(['status' => 'error', 'message' => 'Error al conectar a la base de datos']);
    exit;
}

// Modificar la consulta SQL para incluir el campo "status"
$sql = "SELECT curp, nombre, apellidoP, apellidoM, fecha_nacimiento, edad, acepta_privacidad, acepta_consentimiento, status FROM registration WHERE usuario_id = ?";
$stmt = $db_connection->prepare($sql);

if ($stmt) {
    $stmt->bind_param("i", $usuario_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();

        // Agregar un campo adicional "disabled" basado en el valor de "status"
        $data['disabled'] = $data['status'] == 1 ? 'true' : 'false';

        echo json_encode(['status' => 'success', 'data' => $data]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No se encontraron registros para este usuario.']);
    }

    $stmt->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'Error en la consulta a la base de datos']);
}

$db_connection->close();
?>