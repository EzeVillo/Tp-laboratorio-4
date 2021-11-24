<?php
require '../fw/fw.php';
require '../models/Cliente.php';
require '../models/Aparato.php';
require '../models/Solicitud_de_reparacion.php';
require '../views/AgregarSolicitudDeReparacion.php';

$v = new AgregarSolicitudDeReparacion();
$v->title = "Agregar solicitud de reparacion";
$c = new Cliente();
$a = new Aparato();
$v->Clientes = $c->Get_clientes();
$v->Aparatos = $a->Get_aparato();
if (isset($_POST["cliente"], $_POST["aparato"])) {
    $s = new Solicitud_de_reparacion();
    try {
        $Id = $s->Crear_solicitud_de_reparacion($_POST["cliente"], $_POST["aparato"]);
    } catch (Exception $ex) {
        $error = $ex->getMessage();
    }
    if (isset($error)) {
        $v->msg = $error;
    }
    else{
        $v->msg = "Se creo correctamente la solicitud, el id es ". $Id;
    }
}
$v->render();
