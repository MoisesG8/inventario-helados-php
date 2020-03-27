<?php
require_once "controladores/plantilla.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/ventas.controlador.php";
$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();