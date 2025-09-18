<?php
class Producto {
    public $nombre;
    public $imagen;
    public $categoria;
    public $precio;

    public function __construct($nombre, $imagen, $categoria, $precio) {
        $this->nombre = $nombre;
        $this->imagen = $imagen;
        $this->categoria = $categoria;
        $this->precio = $precio;
    }
}
