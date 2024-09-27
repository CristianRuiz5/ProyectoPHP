<?php
// Incluir el archivo del modelo Empleado y la conexión a la base de datos
include_once(__DIR__ . '/../modelo/Empleado.php');  
include_once(__DIR__ . '/../modelo/database.php');  

class EmpleadoController {
    private $db;
    private $empleado;

    public function __construct() {
        // Crear instancia de la clase Database y obtener la conexión
        $database = new Database();
        $this->db = $database->getConnection();
    }

    // Método para listar todos los empleados
    public function listarEmpleados() {
        $query = "SELECT * FROM empleados";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para crear un nuevo empleado
    public function crearEmpleado($datos) {
        $this->empleado->codigo = $datos['codigo'];
        $this->empleado->nombre = $datos['nombre'];
        $this->empleado->email = $datos['email'];
        $this->empleado->telefono = $datos['telefono'];
        $this->empleado->departamento = $datos['departamento'];
        $this->empleado->salario = $datos['salario'];

        return $this->empleado->crearEmpleado();
    }

    // Otros métodos como actualizarEmpleado, eliminarEmpleado...
}
?>

