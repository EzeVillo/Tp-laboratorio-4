<?php
require '../fw/fw.php';
require '../models/Solicitud_De_Reparacion.php';
require '../views/EstadoSolicitudDeReparacion.php';

$v = new EstadoSolicitudDeReparacion();
if (isset($_POST["id_solicitud_de_reparacion"])) {
    $s = new Solicitud_De_Reparacion();
    $v->estado = $s->Get_estado($_POST["id_solicitud_de_reparacion"]);
}
$v->title = "Estado de solicitud";
$v->render();
