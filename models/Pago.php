<?php
class Pago extends Model
{
    public function Get_estado_caja()
    {
        $this->db->query("SELECT SUM(Monto) as estado FROM pago p JOIN metodo_de_pago m ON m.Id_metodo_de_pago = p.Id_metodo_de_pago WHERE m.nombre = 'Efectivo'");
        return $this->db->fetch()["estado"];
    }
}
