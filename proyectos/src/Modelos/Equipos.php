<?php

abstract class Equipo{

private readonly string $codigo;

private readonly string $nombre;
public function __construct($codigo, $nombre) {
    $this->$codigo = $codigo;
    $this->$nombre = $nombre;
}

public abstract function diasMaximoPrestado(): int ;


}

class Laptop{

}

class Proyector{
    
}

?>