<?php
// Incluir el controlador del empleado
include_once '../controlador/EmpleadoController.php';

// Crear una instancia del controlador
$controller = new EmpleadoController();

// Verificar si hay un código de empleado en la URL para eliminar
if (isset($_GET['codigo'])) {
    // Obtener el código del empleado a eliminar
    $codigo = intval($_GET['codigo']);  // Asegurarse de que el código es un número entero

    // Intentar eliminar el empleado
    if ($controller->eliminarEmpleado($codigo)) {
        // Redirigir al listado de empleados si la eliminación fue exitosa
        header("Location: index.php");
        exit();
    } else {
        echo "Error al eliminar el empleado.";
    }
} else {
    // Redirigir al listado si no se proporciona un código de empleado
    header("Location: index.php");
    exit();
}
?>
