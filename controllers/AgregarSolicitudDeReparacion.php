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
    $s->Crear_solicitud_de_reparacion($_POST["cliente"], $_POST["aparato"]);
    $v->msg = "Se creo correctamente la solicitud del cliente con DNI " . $_POST["cliente"];
}
$v->render();
