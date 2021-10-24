<?php
require '../fw/fw.php';
require '../models/Pago.php';
require '../views/EstadoDeLaCaja.php';

$p = new Pago();
$v = new EstadoDeLaCaja();
$v->estado = $p->Get_estado_caja();
$v->title = "Estado de la caja";
$v->render();
