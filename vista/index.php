<?php
// Incluir el controlador para manejar la lógica de negocio
include_once '../controlador/EmpleadoController.php';

// Crear una instancia del controlador
$controller = new EmpleadoController();

// Obtener la lista de empleados
$empleados = $controller->listarEmpleados();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Empleados</title>

    <!-- Incluir Bootstrap 5 desde el CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ENjdO4Dr2bkBIFxQpeoB6z2NH1fepEG6okpb3Ud1L1oe55HjHV3D9uuRaO6si1" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1 class="my-4">Listado de Empleados</h1>

        <!-- Botón para agregar un nuevo empleado -->
        <a href="create.php" class="btn btn-primary mb-3">Crear nuevo empleado</a>

        <!-- Tabla para mostrar el listado de empleados con clases Bootstrap -->
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Recorrer el array de empleados para mostrar los datos en la tabla -->
                <?php foreach ($empleados as $empleado): ?>
                <tr>
                    <td><?php echo $empleado['codigo']; ?></td>
                    <td><?php echo $empleado['nombre']; ?></td>
                    <td><?php echo $empleado['email']; ?></td>
                    <td><?php echo $empleado['telefono']; ?></td>
                    <td>
                        <!-- Enlaces para editar o eliminar un empleado con clases Bootstrap -->
                        <a href="edit.php?codigo=<?php echo $empleado['codigo']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="delete.php?codigo=<?php echo $empleado['codigo']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Incluir los scripts de Bootstrap desde el CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoB6z2NH1fepEG6okpb3Ud1L1oe55HjHV3D9uuRaO6si1" crossorigin="anonymous"></script>
</body>
</html>
