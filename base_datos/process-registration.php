<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "proceso"; // Corrige el nombre de la base de datos aquí

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo"]; 
    $contrasena = $_POST["contrasena"]; 

    $query = "INSERT INTO usuario (correo, contrasena) VALUES (?, ?)";

    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $correo, $contrasena);

    if (mysqli_stmt_execute($stmt)) {
        echo "Registro exitoso.";
    } else {
        echo "Error al registrar: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
