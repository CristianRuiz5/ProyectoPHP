<?php
// Definición de la clase Factura
class Factura {
    // Atributos privados de Factura
    private $fecha;
    private $numero;
    private $total;

    // Constructor para inicializar los atributos de Factura
    public function __construct($fecha, $numero, $total) {
        $this->fecha = $fecha;
        $this->numero = $numero;
        $this->total = $total;
    }

    // Métodos getter para obtener los valores de Factura
    public function getFecha() {
        return $this->fecha;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getTotal() {
        return $this->total;
    }

    // Métodos setter para modificar los valores de Factura
    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setTotal($total) {
        $this->total = $total;
    }
}
?>
