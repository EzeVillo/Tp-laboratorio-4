<?php
class Cliente extends Model
{
    public function Get_clientes()
    {
        $this->db->query("SELECT * FROM cliente");
        return $this->db->fetchAll();
    }
}
