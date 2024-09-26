<?php
// Definición de la clase Empresa
class Empresa {
    // Atributos privados de la empresa
    private $codigo;
    private $nombre;

    // Constructor para inicializar los atributos de Empresa
    public function __construct($codigo, $nombre) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
    }

    // Métodos getter para obtener los atributos de Empresa
    public function getCodigo() {
        return $this->codigo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    // Métodos setter para modificar los atributos de Empresa
    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
}
?>
