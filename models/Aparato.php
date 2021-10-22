<?php
class Aparato extends Model
{
    public function Get_aparato()
    {
        $this->db->query("SELECT * FROM aparato WHERE retirado = 'No'");
        return $this->db->fetchAll();
    }
}
