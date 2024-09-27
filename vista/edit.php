<?php
// Incluir el controlador del empleado
include_once '../controlador/EmpleadoController.php';

// Crear una instancia del controlador
$controller = new EmpleadoController();

// Verificar si hay un código de empleado en la URL para editar
if (isset($_GET['codigo'])) {
    // Obtener los datos del empleado para precargar el formulario
    $empleado = $controller->obtenerEmpleado($_GET['codigo']);
} else {
    // Redirigir al listado si no se proporciona un código
    header("Location: index.php");
    exit();
}

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $datos = [
        'codigo' => $_POST['codigo'],
        'nombre' => $_POST['nombre'],
        'email' => $_POST['email'],
        'telefono' => $_POST['telefono'],
        'departamento' => $_POST['departamento'],
        'salario' => $_POST['salario']
    ];

    // Intentar actualizar el empleado
    if ($controller->actualizarEmpleado($datos)) {
        // Redirigir al listado de empleados si la actualización fue exitosa
        header("Location: index.php");
        exit();
    } else {
        echo "Error al actualizar el empleado.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Editar Empleado</h1>

        <form action="edit.php?codigo=<?php echo $empleado['codigo']; ?>" method="POST">
            <input type="hidden" name="codigo" value="<?php echo $empleado['codigo']; ?>">

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $empleado['nombre']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $empleado['email']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $empleado['telefono']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="departamento" class="form-label">Departamento</label>
                <input type="text" class="form-control" id="departamento" name="departamento" value="<?php echo $empleado['departamento']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="salario" class="form-label">Salario</label>
                <input type="number" step="0.01" class="form-control" id="salario" name="salario" value="<?php echo $empleado['salario']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="index.php" class="btn btn-secondary">Volver al Listado</a>
        </form>
    </div>
</body>
</html>
