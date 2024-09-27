<?php
// Clase Database que gestiona la conexión a la base de datos
class Database {
    // Parámetros de conexión
    private $host = "localhost";  // El servidor MySQL en tu máquina local
    private $db_name = "mi_base_de_datos";  // Nombre de tu base de datos en MySQL
    private $username = "root";  // El usuario predeterminado de XAMPP
    private $password = "";  // Contraseña predeterminada de XAMPP (vacía)
    public $conn;

    // Método para obtener la conexión a la base de datos
    public function getConnection() {
        $this->conn = null;
        try {
            // Establecer la conexión con PDO (PHP Data Objects)
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");  // Asegurarse de usar UTF-8
        } catch(PDOException $exception) {
            // Mostrar un mensaje de error si no se puede conectar
            echo "Error en la conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>
