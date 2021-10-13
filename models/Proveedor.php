<?php
class Proveedor extends Model
{
    public function Get_proveedores()
    {
        $this->db->query("SELECT * FROM proveedor");
        return $this->db->fetchAll();
    }

    public function Crear_proveedor($nombre)
    {
        if (strlen($nombre) > 50) throw new Exception();
        if (strlen($nombre) < 2) throw new Exception();
        $nombre = $this->db->escape($nombre);
        $this->db->query("SELECT COUNT(nombre) c FROM proveedor WHERE nombre = '$nombre'");
        $res = $this->db->fetch()["c"];
        if ($res > 0) throw new Exception();
        $this->db->query("INSERT INTO proveedor (nombre) VALUES ('$nombre')");
    }
}
