<?php
include_once(__DIR__ . '/../modelo/Producto.php');
include_once(__DIR__ . '/../modelo/database.php');

class ProductoController {
    private $db;
    private $producto;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    // Método para crear un nuevo producto
    public function crearProducto($datos) {
        $this->producto = new Producto(
            null, // El código se genera automáticamente en la base de datos
            $datos['nombre'],
            $datos['stock'],
            $datos['valorUnitario']
        );

        $query = "INSERT INTO productos (nombre, stock, valorUnitario) VALUES (:nombre, :stock, :valorUnitario)";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':nombre', $this->producto->getNombre());
        $stmt->bindParam(':stock', $this->producto->getStock());
        $stmt->bindParam(':valorUnitario', $this->producto->getValorUnitario());

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Método para listar todos los productos
    public function listarProductos() {
        $query = "SELECT * FROM productos";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para actualizar un producto
    public function actualizarProducto($datos) {
        $query = "UPDATE productos SET nombre = :nombre, stock = :stock, valorUnitario = :valorUnitario WHERE codigo = :codigo";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':codigo', $datos['codigo']);
        $stmt->bindParam(':nombre', $datos['nombre']);
        $stmt->bindParam(':stock', $datos['stock']);
        $stmt->bindParam(':valorUnitario', $datos['valorUnitario']);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Método para eliminar un producto
    public function eliminarProducto($codigo) {
        $query = "DELETE FROM productos WHERE codigo = :codigo";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':codigo', $codigo);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>
