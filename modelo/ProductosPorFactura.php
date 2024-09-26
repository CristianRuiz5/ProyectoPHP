<?php
// Definición de la clase ProductosPorFactura
class ProductosPorFactura {
    // Atributos privados para representar la cantidad y subtotal
    private $cantidad;
    private $subtotal;

    // Constructor para inicializar los atributos de ProductosPorFactura
    public function __construct($cantidad, $subtotal) {
        $this->cantidad = $cantidad;
        $this->subtotal = $subtotal;
    }

    // Métodos getter para obtener los valores de ProductosPorFactura
    public function getCantidad() {
        return $this->cantidad;
    }

    public function getSubtotal() {
        return $this->subtotal;
    }

    // Métodos setter para modificar los valores de ProductosPorFactura
    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    public function setSubtotal($subtotal) {
        $this->subtotal = $subtotal;
    }
}
?>
