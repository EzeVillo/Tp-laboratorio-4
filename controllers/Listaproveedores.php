<?php
require '../fw/fw.php';
require '../models/Proveedor.php';
require '../views/ListadoProveedores.php';

$p = new Proveedor();
$v = new ListadoProveedores();
$v->Proveedores = $p->Get_proveedores();
$v->title = "Listado proveedores";
$v->render();
