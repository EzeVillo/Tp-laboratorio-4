<?php
class Metodo_de_pago extends Model
{
    public function Get_Metodos_de_pago()
    {
        $this->db->query("SELECT Id_metodo_de_pago, Nombre FROM Metodo_de_pago");
        return $this->db->fetchAll();
    }
}
