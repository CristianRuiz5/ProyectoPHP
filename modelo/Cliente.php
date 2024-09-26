<?php
// Incluir la clase Persona
include_once 'Persona.php';

// Definición de la clase Cliente, que también hereda de Persona
class Cliente extends Persona {
    // Atributo privado específico de Cliente
    private $credito;

    // Constructor que inicializa los atributos de Persona y el atributo específico de Cliente
    public function __construct($codigo, $nombre, $email, $telefono, $credito) {
        // Llamar al constructor de Persona
        parent::__construct($codigo, $nombre, $email, $telefono);
        $this->credito = $credito;
    }

    // Método getter para obtener el valor del crédito
    public function getCredito() {
        return $this->credito;
    }

    // Método setter para modificar el valor del crédito
    public function setCredito($credito) {
        $this->credito = $credito;
    }
}
?>
