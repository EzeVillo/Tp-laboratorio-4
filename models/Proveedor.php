<?php
class Proveedor extends Model
{
    public function Get_proveedores()
    {
        $this->db->query("SELECT * FROM proveedor");
        return $this->db->fetchAll();
    }
}
