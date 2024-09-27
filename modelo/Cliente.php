<?php
class Cliente {
    // Conexión y nombre de la tabla
    private $conn;
    private $table_name = "cliente";

    // Atributos del cliente
    public $codigo;
    public $nombre;
    public $email;
    public $telefono;
    public $credito;

    // Constructor que recibe la conexión a la base de datos
    public function __construct($db) {
        $this->conn = $db;
    }

    // Método para crear un nuevo cliente
    public function crearCliente() {
        $query = "INSERT INTO " . $this->table_name . " SET nombre=:nombre, email=:email, telefono=:telefono, credito=:credito";

        // Preparar la consulta
        $stmt = $this->conn->prepare($query);

        // Vincular los parámetros
        $stmt->bindParam(":nombre", $this->nombre);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":telefono", $this->telefono);
        $stmt->bindParam(":credito", $this->credito);

        // Ejecutar la consulta
        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Método para leer todos los clientes
    public function leerClientes() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Otros métodos como actualizarCliente, eliminarCliente, etc.
}
?>
