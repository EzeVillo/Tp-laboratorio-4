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

    public function Get_estado($Id_solicitud_de_reparacion)
    {
        if (!ctype_digit($Id_solicitud_de_reparacion)) throw new Exception();

        $this->db->query("SELECT nombre FROM solicitud_de_reparacion s LEFT JOIN estado e on e.Id_estado = s.Id_estado WHERE Id_solicitud_de_reparacion = $Id_solicitud_de_reparacion");
        if ($this->db->numRows() != 1) return "Solicitud de reparacion no existente";
        return $this->db->fetch()["nombre"];
    }

    
    public function PagoFactura($id_solicitud_de_reparacion)
    {
        if (!ctype_digit($id_solicitud_de_reparacion)) throw new Exception("El id de la solicitud de reparacion debe ser un numero");

        $this->db->query("SELECT COUNT(Id_solicitud_de_reparacion) c 
        FROM Solicitud_de_reparacion 
        WHERE Id_solicitud_de_reparacion = $id_solicitud_de_reparacion &&
        Pagado = 'No'
        LIMIT 1");
        if ($this->db->fetch()["c"] != 1) throw new Exception("No existe una solicitud de repacion con ese id y que no este pagada");

        $this->db->query("UPDATE Solicitud_de_reparacion SET Pagado = 'Si'");
    }
}
