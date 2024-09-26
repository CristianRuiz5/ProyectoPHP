<?php
// Definición de la clase base Persona, que contiene atributos comunes
class Persona {
    // Atributos privados de la clase Persona
    private $codigo;
    private $nombre;
    private $email;
    private $telefono;

    // Constructor de la clase para inicializar los valores de los atributos
    public function __construct($codigo, $nombre, $email, $telefono) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->telefono = $telefono;
    }

    // Métodos getter para obtener el valor de los atributos privados
    public function getCodigo() {
        return $this->codigo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    // Métodos setter para modificar el valor de los atributos privados
    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
}
?>
