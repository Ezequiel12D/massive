<?php
$controller = $_GET['c'] ?? 'home';
$method = $_GET['m'] ?? 'index';

$controllerName = ucfirst($controller).'Controller';
require_once "controllers/{$controllerName}.php";

$objController = new $controllerName();
$objController->$method();

session_start();
$cantidadCarrito = isset($_SESSION['carrito']) ? count($_SESSION['carrito']) : 0;
?>