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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Listado de Empleados</h1>

        <!-- Botón para agregar un nuevo empleado -->
        <a href="create.php" class="btn btn-primary mb-3">Crear nuevo empleado</a>

        <!-- Tabla para mostrar el listado de empleados -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Departamento</th>
                    <th>Salario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empleados as $empleado): ?>
                <tr>
                    <td><?php echo $empleado['codigo']; ?></td>
                    <td><?php echo $empleado['nombre']; ?></td>
                    <td><?php echo $empleado['email']; ?></td>
                    <td><?php echo $empleado['telefono']; ?></td>
                    <td><?php echo $empleado['departamento']; ?></td>
                    <td><?php echo $empleado['salario']; ?></td>
                    <td>
                        <!-- Enlaces para editar o eliminar un empleado -->
                        <a href="edit.php?codigo=<?php echo $empleado['codigo']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="delete.php?codigo=<?php echo $empleado['codigo']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Incluir los scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
