<?php
class CartController
{
    public function __construct()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = [];
        }
    }

    // Agregar producto
    public function add()
    {
        $producto = [
            'id' => $_GET['id'] ?? uniqid(),
            'nombre' => $_GET['nombre'] ?? 'Producto sin nombre',
            'precio' => $_GET['precio'] ?? 0,
            'imagen' => $_GET['imagen'] ?? 'https://via.placeholder.com/40'
        ];

        $_SESSION['carrito'][] = $producto;

        header("Location: index.php?c=home&m=index");
        exit();
    }

    public function index()
    {
        include "views/cart/index.php";
    }

    public function clear()
    {
        $_SESSION['carrito'] = [];
        header("Location: index.php?c=home&m=index");
        exit();
    }
}
