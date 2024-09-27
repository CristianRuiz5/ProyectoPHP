<?php
// Incluir el controlador del empleado
include_once '../controlador/EmpleadoController.php';

$controller = new EmpleadoController();

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $datos = [
        'nombre' => $_POST['nombre'],
        'email' => $_POST['email'],
        'telefono' => $_POST['telefono'],
        'departamento' => $_POST['departamento'],
        'salario' => $_POST['salario']
    ];

    // Intentar crear el empleado
    if ($controller->crearEmpleado($datos)) {
        // Redirigir al listado de empleados si la creación fue exitosa
        header("Location: index.php");
        exit();
    } else {
        echo "Error al crear el empleado.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Crear Nuevo Empleado</h1>

        <form action="create.php" method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="mb-3">
                <label for="departamento" class="form-label">Departamento</label>
                <input type="text" class="form-control" id="departamento" name="departamento" required>
            </div>
            <div class="mb-3">
                <label for="salario" class="form-label">Salario</label>
                <input type="number" step="0.01" class="form-control" id="salario" name="salario" required>
            </div>
            <button type="submit" class="btn btn-primary">Crear Empleado</button>
            <a href="index.php" class="btn btn-secondary">Volver al Listado</a>
        </form>
    </div>
</body>
</html>
