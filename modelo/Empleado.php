<?php
// Incluir la clase base Persona (si Empleado hereda de Persona)
include_once 'Persona.php';

class Empleado extends Persona {
    // Atributos adicionales para la clase Empleado
    private $departamento;
    private $salario;

    // Constructor que inicializa los atributos de Persona y Empleado
    public function __construct($codigo, $nombre, $email, $telefono, $departamento, $salario) {
        // Llamar al constructor de la clase Persona
        parent::__construct($codigo, $nombre, $email, $telefono);
        $this->departamento = $departamento;
        $this->salario = $salario;
    }

    // Métodos getter y setter para los atributos de Empleado
    public function getDepartamento() {
        return $this->departamento;
    }

    public function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }
}
?>
