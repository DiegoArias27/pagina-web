<?php
// Verifica si se ha enviado un archivo
if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    // Obtiene el nombre temporal del archivo
    $imagen_temporal = $_FILES['foto']['tmp_name'];

    // Lee el contenido del archivo
    $imagen_contenido = file_get_contents($imagen_temporal);

    // Escapa el contenido del archivo para prevenir inyecciones SQL
    $imagen_contenido = addslashes($imagen_contenido);

    // Obtiene los valores de los campos restantes del formulario
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña1'];
    $genero = $_POST['gen']; // Aquí debes cambiar 'gen' por el valor del atributo 'name' del input radio de género
    $telefono = $_POST['telefono'];
    $fecha_nacimiento = $_POST['fecha'];
    $calle = $_POST['calle'];
    $exterior = $_POST['exterior'];
    $interior = $_POST['interior'];
    $codigo_postal = $_POST['cp'];
    $colonia = $_POST['col']; // Aquí debes cambiar 'col' por el valor del atributo 'name' del select de colonias
    $servicio = $_POST['servi'];

    // Incluye el archivo de conexión a la base de datos
    include('conection.php');

    // Abre la conexión a la base de datos
    $conn = OpenCon();

    // Consulta para insertar la información en la base de datos
    $sql = "INSERT INTO empleados (Nombre, ApellidoP, ApellidoM, Correo, Contraseña, Genero, Telefono, Fechanac, Calle, exterior, interior, CodigoP, Colonia, Fotografia, Servicio) VALUES ('$nombre', '$paterno', '$materno', '$correo', '$contraseña', '$genero', '$telefono', '$fecha_nacimiento', '$calle', '$exterior', '$interior', '$codigo_postal', '$colonia', '$imagen_contenido', '$servicio')";

    // Ejecuta la consulta
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Se creo la cuenta con éxito');
    window.location='/homelyfix';</script>";
    } else {
        echo "Error al insertar la información: " . $conn->error;
    }

    // Cierra la conexión a la base de datos
    CloseCon($conn);

} else {
    echo "Error al subir la imagen.";
}
?>
