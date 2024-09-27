<?php
// Clase Database que maneja la conexión a la base de datos
class Database {
    private $host = "localhost";
    private $db_name = "base de datos proyectophp";  
    private $username = "root";  // Usuario predeterminado de MySQL en XAMPP
    private $password = "";  // Contraseña predeterminada de XAMPP es vacía
    public $conn;

    // Obtener la conexión a la base de datos
    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Error en la conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>
