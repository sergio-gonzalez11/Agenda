<?php

class ExcepcionesAlumno extends Exception {
//    sobreescribimos el constructor de exception para darle nosotros nuestro
//    propio mensaje cuando queramos lanzar una excepcion personalizada
    public function __construct(string $message) {
        parent::__construct($message);
    }
}
