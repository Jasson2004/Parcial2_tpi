<?php

namespace App\Modelos\Equipo

abstract class Equipo{

private readonly string $codigo;

private readonly string $nombre;
public function __construct($codigo, $nombre) {
    $this->$codigo = $codigo;
    $this->$nombre = $nombre;
}

public abstract function diasMaximoPrestado(): int ;


}

class Laptop extends Equipo{

public $codigo;
public $nombre;
public $diasMax;

function diasMaximoPrestado(){
$this->diaMax = 3;
}
}

class Proyector{
public $codigo;
public $nombre;
public $diasMax;

function diasMaximoPrestado(){
$this->diaMax = 1;
}
}

?>