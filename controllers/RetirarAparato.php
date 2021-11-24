<?php
require '../fw/fw.php';
require '../models/Aparato.php';
require '../views/RetirarAparato.php';

$v = new RetirarAparato();
if (isset($_POST["id_solicitud_de_reparacion"])) {
    $a = new Aparato();
    try{
        $a->RetirarAparato($_POST["id_solicitud_de_reparacion"]);
    }catch(Exception $ex){
        $error = $ex->getMessage();
    }
    if (isset($error)) {
        $v->msg = $error;
    } else {
        $v->msg = "Se ha retirado el aparato";
    }
}
$v->title = "Retirar aparato";
$v->render();