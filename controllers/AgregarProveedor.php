<?php
require '../fw/fw.php';
require '../models/Proveedor.php';
require '../views/AgregarProveedor.php';

$v = new AgregarProveedor();
$v->title = "Agregar proveedor";
if (isset($_POST["nombre"])) {
    $p = new Proveedor();
    $p->Crear_proveedor($_POST["nombre"]);
    $v->msg = "Se creo correctamente el proveedor " . $_POST["nombre"];
}
$v->render();
