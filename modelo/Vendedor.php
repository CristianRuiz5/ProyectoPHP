<?php
include_once 'Persona.php';

class Vendedor extends Persona {
    private $carnet;
    private $direccion;

    public function __construct($codigo, $nombre, $email, $telefono, $carnet, $direccion) {
        parent::__construct($codigo, $nombre, $email, $telefono);
        $this->carnet = $carnet;
        $this->direccion = $direccion;
    }

    public function getCarnet() {
        return $this->carnet;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setCarnet($carnet) {
        $this->carnet = $carnet;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }
}
?>
