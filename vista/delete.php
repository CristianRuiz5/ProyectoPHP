<?php
// Incluir el controlador del empleado
include_once '../controlador/EmpleadoController.php';

// Crear una instancia del controlador
$controller = new EmpleadoController();

// Verificar si hay un ID en la URL para eliminar
if (isset($_GET['codigo'])) {
    // Intentar eliminar el empleado
    if ($controller->eliminarEmpleado($_GET['codigo'])) {
        // Redirigir al listado de empleados si la eliminación fue exitosa
        header("Location: index.php");
        exit();
    } else {
        echo "Error al eliminar el empleado.";
    }
} else {
    // Redirigir si no se proporciona un ID
    header("Location: index.php");
    exit();
}
?>
