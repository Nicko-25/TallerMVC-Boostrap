<?php
class DocenteController {
    public function __construct()
    {
        require_once "model/DocenteModel.php";
    }

    public function index() {
        require_once "model/DocenteModel.php";
        $docente = new Docente_model();
        $docenteII = new Docente_model();
        $data["docentes"] = $docente->get_docentes();
        $data["docentesII"] = $docenteII->get_docentesII();
        

        require_once "views/docente.php";
    
    }

    public function nuevo() {
        require_once "views/docente_nuevo.php";
    }

    public function guarda() {
        $nombre = $_POST['nombre'];
        $ciudad = $_POST['ciudad'];
        $telefono = $_POST['telefono'];
        $codigo = $_POST['codigo'];

        $docente = new Docente_model();
        $docente->insertar($nombre, $ciudad, $telefono, $codigo);
        require_once "views/docente_nuevo.php";
        $this->index();
    }


    public function modificar($id) {
        $docente = new Docente_model();
     
        $data["id"] =  $id;
        $data["docente"] = $docente->get_docente($id);
        require_once "views/docente_modificar.php";
    }

    public function actualizar() {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $ciudad = $_POST['ciudad'];
        $telefono = $_POST['telefono'];
        $codigo = $_POST['codigo'];

        $docente = new Docente_model();
        $docente->modificar($id, $nombre, $ciudad, $telefono, $codigo);
        require_once "views/docente_nuevo.php";
        $this->index();
    }

    public function eliminar($id) {
        $docente = new Docente_model();
        $docente->eliminar($id);
        $this->index();
    }
}




?>