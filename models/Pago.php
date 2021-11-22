<?php
class Pago extends Model
{
    public function Get_estado_caja()
    {
        $this->db->query("SELECT SUM(Monto) as estado FROM pago p JOIN metodo_de_pago m ON m.Id_metodo_de_pago = p.Id_metodo_de_pago WHERE m.nombre = 'Efectivo'");
        return $this->db->fetch()["estado"];
    }

    public function NuevoPago($id_solicitud_de_reparacion, $monto, $id_metodo_de_pago)
    {
        if (!ctype_digit($id_solicitud_de_reparacion)) throw new Exception();
        $this->db->query("SELECT COUNT(id_solicitud_de_reparacion) c FROM Solicitud_de_reparacion WHERE id_solicitud_de_reparacion = $id_solicitud_de_reparacion");
        if ($this->db->fetch()["c"] != 1) throw new Exception();

        if (!ctype_digit($id_metodo_de_pago)) throw new Exception();
        $this->db->query("SELECT COUNT(Id_metodo_de_pago) c FROM Metodo_de_pago WHERE Id_metodo_de_pago = $id_metodo_de_pago");
        if ($this->db->fetch()["c"] != 1) throw new Exception();

        if (!ctype_digit($monto)) throw new Exception();

        $this->db->query("SELECT Id_cliente FROM Solicitud_de_reparacion WHERE Id_solicitud_de_reparacion = $id_solicitud_de_reparacion");
        $Id_cliente = $this->db->fetch()["Id_cliente"];

        $this->db->query("INSERT INTO Pago(Id_cliente, monto, Id_metodo_de_pago) VALUES($Id_cliente, $monto, $id_metodo_de_pago)");
    }
}
