<?php
class Solicitud_de_reparacion extends Model
{
    public function Crear_solicitud_de_reparacion($Id_cliente, $Id_aparato)
    {
        if (!ctype_digit($Id_cliente)) throw new Exception();
        if (!ctype_digit($Id_aparato)) throw new Exception();

        $this->db->query("SELECT COUNT(Id_cliente) c FROM Cliente WHERE Id_cliente = $Id_cliente LIMIT 1");
        if ($this->db->fetch()["c"] != 1) throw new Exception();

        $this->db->query("SELECT COUNT(Id_cliente) c FROM Cliente WHERE Id_cliente = $Id_cliente  LIMIT 1");
        if ($this->db->fetch()["c"] != 1) throw new Exception();

        $this->db->query("INSERT INTO solicitud_de_reparacion (Id_cliente, Id_aparato) VALUES ($Id_cliente, $Id_aparato)");
    }
}
