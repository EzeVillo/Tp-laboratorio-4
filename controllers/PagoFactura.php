<?php
require '../fw/fw.php';
require '../models/Pago.php';
require '../models/Solicitud_de_reparacion.php';
require '../models/Metodo_de_pago.php';
require '../views/PagoFactura.php';

$m = new Metodo_de_pago();
$v = new PagoFactura();
if (isset($_POST["id_solicitud_de_reparacion"], $_POST["monto"], $_POST["id_metodo_de_pago"])) {
    $p = new Pago();
    $s = new Solicitud_de_reparacion();
    $s->PagoFactura($_POST["id_solicitud_de_reparacion"]);
    $p->NuevoPago($_POST["id_solicitud_de_reparacion"], $_POST["monto"], $_POST["id_metodo_de_pago"]);
    $v->estado = "Pago confirmado";
}
$v->Metodos_de_pago = $m->Get_Metodos_de_pago();
$v->title = "Pago Factura";
$v->render();
