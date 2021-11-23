<?php
class Aparato extends Model
{
    public function Get_aparato()
    {
        $this->db->query("SELECT * FROM aparato WHERE retirado = 'No'");
        return $this->db->fetchAll();
    }

    public function RetirarAparato($id_solicitud_de_reparacion)
    {
        if (!ctype_digit($id_solicitud_de_reparacion)) throw new Exception("El id de la solicitud de reparacion debe ser un numero");

        $this->db->query("SELECT s.Id_aparato
        FROM Solicitud_de_reparacion s
        LEFT JOIN Aparato a ON s.Id_aparato = a.Id_aparato
        WHERE Id_solicitud_de_reparacion = $id_solicitud_de_reparacion &&
        Pagado = 'Si' &&
        Retirado = 'No'
        LIMIT 1");
        if ($this->db->numRows() != 1) throw new Exception("No existe una una solicitud de reparacion con ese id, que este pagada y no este retirada");
        $id_aparato = $this->db->fetch()["Id_aparato"];

        $this->db->query("UPDATE Aparato SET Retirado = 'Si' WHERE Id_aparato = $id_aparato");
    }
}
