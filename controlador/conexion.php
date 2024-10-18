<?php
$servername = "localhost"; // Cambia esto si tu servidor no es local
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "bd_universidad";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>


<?php
// Incluir la conexión a la base de datos
include('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta para buscar en las tablas alumnos y profesores
    $sql_alumnos = "SELECT * FROM alumnos WHERE correo = '$email' AND contraseña = '$password'";
    $sql_profesores = "SELECT * FROM profesores WHERE correo = '$email' AND contraseña = '$password'";

    $result_alumnos = $conn->query($sql_alumnos);
    $result_profesores = $conn->query($sql_profesores);

    if ($result_alumnos->num_rows > 0) {
        echo "Bienvenido alumno";
    } elseif ($result_profesores->num_rows > 0) {
        echo "Bienvenido profesor";
    } else {
        echo "Correo o contraseña incorrectos";
    }
}

$conn->close();
?>
