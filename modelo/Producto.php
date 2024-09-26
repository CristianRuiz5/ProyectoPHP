<?php
// Definición de la clase Producto
class Producto {
    // Atributos privados de Producto
    private $codigo;
    private $nombre;
    private $stock;
    private $valorUnitario;

    // Constructor para inicializar los atributos de Producto
    public function __construct($codigo, $nombre, $stock, $valorUnitario) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->stock = $stock;
        $this->valorUnitario = $valorUnitario;
    }

    // Métodos getter para obtener los valores de Producto
    public function getCodigo() {
        return $this->codigo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getStock() {
        return $this->stock;
    }

    public function getValorUnitario() {
        return $this->valorUnitario;
    }

    // Métodos setter para modificar los valores de Producto
    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setStock($stock) {
        $this->stock = $stock;
    }

    public function setValorUnitario($valorUnitario) {
        $this->valorUnitario = $valorUnitario;
    }
}
?>
