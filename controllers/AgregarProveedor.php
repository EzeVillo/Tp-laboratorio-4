<?php
require '../fw/fw.php';
require '../models/Proveedor.php';
require '../views/AgregarProveedor.php';

$v = new AgregarProveedor();
$v->title = "Agregar proveedor";
if (isset($_POST["nombre"])) {
    $p = new Proveedor();
    try {
        $p->Crear_proveedor($_POST["nombre"]);
    } catch (Exception $ex) {
        $error = $ex->getMessage();
    }
    if (isset($error)) {
        $v->msg = $error;
    } else {
        $v->msg = "Se creo correctamente el proveedor " . $_POST["nombre"];
    }
}
$v->render();
