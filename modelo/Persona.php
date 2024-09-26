<?php
class Persona {
    private $codigo;
    private $nombre;
    private $email;
    private $telefono;

    public function __construct($codigo, $nombre, $email, $telefono) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->telefono = $telefono;
    }

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
