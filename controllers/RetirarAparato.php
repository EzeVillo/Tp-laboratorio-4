<?php
require '../fw/fw.php';
require '../models/Aparato.php';
require '../views/RetirarAparato.php';

$v = new RetirarAparato();
if (isset($_POST["id_solicitud_de_reparacion"])) {
    $a = new Aparato();
    $a->RetirarAparato($_POST["id_solicitud_de_reparacion"]);
    $v->msg = "Se ha retirado el aparato";
}
$v->title = "Retirar aparato";
$v->render();