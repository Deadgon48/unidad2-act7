<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Recuperar datos
    $nombre = $_POST['nombre'] ?? '';
    $n_control = $_POST['n_control'] ?? '';
    $carrera = $_POST['carrera'] ?? '';
    $semestre = $_POST['semestre'] ?? '';
    $correo = $_POST['correo'] ?? '';

    // 2. Verificar que ningún campo llegue vacío
    if (empty($nombre) || empty($n_control) || empty($carrera) || empty($semestre) || empty($correo)) {
        die("Error: Todos los campos son obligatorios. <a href='registro.html'>Volver</a>");
    }

    echo "<h1>Resumen de Registro</h1>";

    // 3. Lógica de Negocio
    if ($carrera == "Ing. Sistemas") {
        echo "<p style='color: blue; font-weight: bold;'>¡Bienvenido al mundo de la computación funcional!</p>";
    }

    // 4. Salida en tabla
    echo "<table border='1' cellpadding='10' style='border-collapse: collapse;'>
            <tr style='background-color: #f2f2f2;'>
                <th>Campo</th>
                <th>Valor Capturado</th>
            </tr>
            <tr>
                <td>Nombre completo</td>
                <td>$nombre</td>
            </tr>
            <tr>
                <td>Número de Control</td>
                <td>$n_control</td>
            </tr>
            <tr>
                <td>Carrera</td>
                <td>$carrera</td>
            </tr>
            <tr>
                <td>Semestre</td>
                <td>$semestre</td>
            </tr>
            <tr>
                <td>Correo Institucional</td>
                <td>$correo</td>
            </tr>
          </table>";

    echo "<br><a href='registro.html'>Registrar otro alumno</a>";
} else {
    // Redirigir si intentan entrar al script directamente
    header("Location: registro.html");
}
?>