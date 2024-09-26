<?php
// Incluir el archivo Persona para heredar su funcionalidad
include_once 'Persona.php';

// Definición de la clase Vendedor, que hereda de Persona
class Vendedor extends Persona {
    // Atributos privados adicionales para la clase Vendedor
    private $carnet;
    private $direccion;

    // Constructor que llama al constructor de la clase padre (Persona) y asigna los atributos propios de Vendedor
    public function __construct($codigo, $nombre, $email, $telefono, $carnet, $direccion) {
        // Llamar al constructor de la clase Persona
        parent::__construct($codigo, $nombre, $email, $telefono);
        $this->carnet = $carnet;
        $this->direccion = $direccion;
    }

    // Métodos getter para los atributos de Vendedor
    public function getCarnet() {
        return $this->carnet;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    // Métodos setter para modificar los atributos de Vendedor
    public function setCarnet($carnet) {
        $this->carnet = $carnet;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }
}
?>
