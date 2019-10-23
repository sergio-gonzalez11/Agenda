<?php

class classAlumno {
    private $dni;
    private $nombre;
    private $curso;
    
    
function getDni() {
    return $this->dni;
}
function getNombre() {
    return $this->nombre;
}
function getCurso() {
    return $this->curso;
}
function setDni($dni) {
    $this->dni = $dni;
}
function setNombre($nombre) {
    $this->nombre = $nombre;
}
function setCurso($curso) {
    $this->curso = $curso;
}

function __construct($dni, $nombre, $curso) {
    $this->dni = $dni;
    $this->nombre = $nombre;
    $this->curso = $curso;
}



}
