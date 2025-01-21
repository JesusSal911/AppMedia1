<?php
// Parámetros de la conexión
$server = "localhost";
$user = "root";
$pass = "";
$bd = "bdcon";

// Creamos la conexión
try {
    $DBcon = new PDO("mysql:host=$server;dbname=$bd", $user, $pass);
    $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

// Verificamos si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Obtenemos los datos del formulario
    $nombre = $_GET["nombre"] ?? '';
    $apellido = $_GET["apellido"] ?? '';
    $edad = $_GET["edad"] ?? '';
    $genero = $_GET["genero"] ?? '';
    $dni = $_GET["dni"] ?? '';
    $email = $_GET["email"] ?? '';
    $localidad = $_GET["localidad"] ?? '';
    $telefono = $_GET["telefono"] ?? '';

    // Preparamos la consulta SQL
    $sql = "INSERT INTO usuarios (nombre, apellido, edad, genero, dni, email, localidad, telefono) 
            VALUES (:nombre, :apellido, :edad, :genero, :dni, :email, :localidad, :telefono)";

    try {
        $stmt = $DBcon->prepare($sql);
        
        // Vinculamos los parámetros
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':edad', $edad);
        $stmt->bindParam(':genero', $genero);
        $stmt->bindParam(':dni', $dni);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':localidad', $localidad);
        $stmt->bindParam(':telefono', $telefono);

        // Ejecutamos la consulta
        $stmt->execute();

        // Mostramos mensaje de éxito en un cuadro con un botón de regresar
        echo '<div style="max-width: 800px; margin: 5% auto; padding: 40px; text-align: center; color: #6c757d; background-color: #ffffff; border: 1px dashed #ced4da; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <button type="button" style="position: absolute; top: 10px; right: 10px; background-color: rgba(108, 117, 125, 0.1); border: none; border-radius: 50%; padding: 10px; cursor: pointer;" aria-label="Close" onclick="location.href=\'media.html\';">✖</button>
                <h1 style="color: #0d6efd;">Registro Guardados</h1>
                <p style="margin: 20px auto; max-width: 600px;">Este es un mensaje de éxito. Los datos han sido guardados correctamente.</p>
                <button style="padding: 10px 30px; background-color: #0d6efd; color: white; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;" type="button" onclick="location.href=\'media.html\';">
                    Regresar a la Pagina Principal
                </button>
              </div>';
    } catch(PDOException $e) {
        echo "Error al guardar el registro: " . $e->getMessage();
    }
} else {
    echo "No se han recibido datos del formulario.";
}
