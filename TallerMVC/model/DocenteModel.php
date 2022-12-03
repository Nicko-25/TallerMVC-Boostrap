<?php
class Docente_model
{
    private $db;
    private $docente;
    private $docenteII;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->docente = array();
    }

    public function get_docentes()
    {
        $sql = "SELECT * FROM tabla1";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->docente[] = $row;
        }
        return $this->docente;
    }


    public function get_docentesII()
    {
        $sql = "SELECT * FROM tabla2";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->docenteII[] = $row;
        }
        return $this->docenteII;
    }

    public function insertar($nombre, $ciudad, $telefono, $codigo){
        $resultado = $this->db->query("INSERT INTO tabla1 (nombre, ciudad, telefono, codigo) VALUES ('$nombre', '$ciudad', '$telefono', '$codigo')");
    }

    public function modificar($id, $nombre, $ciudad, $telefono, $codigo){
        $resultado = $this->db->query("UPDATE tabla1 SET nombre='$nombre', ciudad='$ciudad', telefono='$telefono', codigo='$codigo'
        WHERE id = '$id'");
    }

    public function eliminar($id){
        $resultado = $this->db->query("DELETE FROM tabla1
        WHERE id = '$id'");
    }

    public function get_docente($id)
    {
        $sql = "SELECT * FROM tabla1 WHERE id='$id' LIMIT 1";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        return $row;
    }


    public function get_docenteII($id)
    {
        $sql = "SELECT * FROM tabla2 WHERE id='$id' LIMIT 1";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->docenteII[] = $row;
        }
        return $this->docenteII;
    }

}
