<?php
// Incluir los archivos necesarios para el controlador
include_once(__DIR__ . '/../modelo/Empleado.php');
include_once(__DIR__ . '/../config/database.php');

class EmpleadoController {
    private $db;
    private $empleado;

    // Constructor que establece la conexión con la base de datos
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
        $this->empleado = new Empleado(
            $datos['codigo'],
            $datos['nombre'],
            $datos['email'],
            $datos['telefono'],
            $datos['departamento'],
            $datos['salario']
        );

        $query = "INSERT INTO empleados (codigo, nombre, email, telefono, departamento, salario) 
                  VALUES (:codigo, :nombre, :email, :telefono, :departamento, :salario)";
        $stmt = $this->db->prepare($query);

        // Asignar valores a los parámetros
        $stmt->bindParam(':codigo', $this->empleado->getCodigo());
        $stmt->bindParam(':nombre', $this->empleado->getNombre());
        $stmt->bindParam(':email', $this->empleado->getEmail());
        $stmt->bindParam(':telefono', $this->empleado->getTelefono());
        $stmt->bindParam(':departamento', $this->empleado->getDepartamento());
        $stmt->bindParam(':salario', $this->empleado->getSalario());

        // Ejecutar la consulta
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Método para actualizar un empleado existente
    public function actualizarEmpleado($datos) {
        $query = "UPDATE empleados 
                  SET nombre = :nombre, email = :email, telefono = :telefono, departamento = :departamento, salario = :salario 
                  WHERE codigo = :codigo";
        $stmt = $this->db->prepare($query);

        // Asignar valores a los parámetros
        $stmt->bindParam(':codigo', $datos['codigo']);
        $stmt->bindParam(':nombre', $datos['nombre']);
        $stmt->bindParam(':email', $datos['email']);
        $stmt->bindParam(':telefono', $datos['telefono']);
        $stmt->bindParam(':departamento', $datos['departamento']);
        $stmt->bindParam(':salario', $datos['salario']);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Método para eliminar un empleado
    public function eliminarEmpleado($codigo) {
        $query = "DELETE FROM empleados WHERE codigo = :codigo";
        $stmt = $this->db->prepare($query);

        // Asignar el valor del código del empleado a eliminar
        $stmt->bindParam(':codigo', $codigo);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Método para obtener los detalles de un empleado
    public function obtenerEmpleado($codigo) {
        $query = "SELECT * FROM empleados WHERE codigo = :codigo";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':codigo', $codigo);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
