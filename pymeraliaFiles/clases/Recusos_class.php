<?php
class Recursos{
    private $idRecurso;
    private $nombreRecurso;

    /** Constructor de la clase Recursos */
    public function __construct($idRecurso, $nombreRecurso){
        $this->idRecurso = $idRecurso
        $this->nombreRecurso = $nombreRecurso
    }

    /** getter Id Recurso */
    public function getIdRecurso(){
        return $this->idRecurso;
    }

    /** getter Nombre Recurso */
    public function getNombreRecurso(){
        return $this->nombreRecurso;
    }

    /** setter Id Recurso */
    private function setIdRecurso($idRecurso){
        $this->idRecurso = $idRecurso
    }

    /** setter Nombre Recurso */
    private function setNombreRecurso($nombreRecurso){
        $this->nombreRecurso = $nombreRecurso
    }

    /** Método que añade un recurso nuevo */
    private function addRecursos(){

    }

    /** Método que edita un recurso existente */
    private function editRecursos(){

    }

    /** Método que elimina un recurso existente */
    private function deleteRecursos(){

    }

    /** Método que muestra un recurso existente */
    public function showRecursos(){

    }

    /** Método que asigna un recurso */
    private function assignRecurso(){

    }

    /** Método que desasigna un recurso */
    private function unassignRecurso(){

    }
}
?>