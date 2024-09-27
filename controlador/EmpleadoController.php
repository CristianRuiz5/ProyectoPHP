<?php
include_once(__DIR__ . '/../modelo/Empleado.php');
include_once(__DIR__ . '/../modelo/database.php');

class EmpleadoController {
    private $db;

    public function __construct() {
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
        $empleado = new Empleado(
            null,  
            $datos['nombre'],
            $datos['email'],
            $datos['telefono'],
            $datos['departamento'],
            $datos['salario']
        );

        $query = "INSERT INTO empleados (nombre, email, telefono, departamento, salario) 
                  VALUES (:nombre, :email, :telefono, :departamento, :salario)";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':nombre', $empleado->getNombre());
        $stmt->bindParam(':email', $empleado->getEmail());
        $stmt->bindParam(':telefono', $empleado->getTelefono());
        $stmt->bindParam(':departamento', $empleado->getDepartamento());
        $stmt->bindParam(':salario', $empleado->getSalario());

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Método para actualizar un empleado existente
    public function actualizarEmpleado($datos) {
        // Consulta SQL para actualizar los datos del empleado
        $query = "UPDATE empleados 
                  SET nombre = :nombre, email = :email, telefono = :telefono, 
                      departamento = :departamento, salario = :salario 
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

    public function eliminarEmpleado($codigo) {
       
        $query = "DELETE FROM empleados WHERE codigo = :codigo";  // Aquí se especifica el código del empleado a eliminar
        $stmt = $this->db->prepare($query);
    
        // Asignar el valor del código del empleado a eliminar
        $stmt->bindParam(':codigo', $codigo, PDO::PARAM_INT);
    
        // Ejecutar la consulta
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
    

    public function obtenerEmpleado($codigo) {
        $query = "SELECT * FROM empleados WHERE codigo = :codigo";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':codigo', $codigo);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    // Otros métodos...
}
?>
