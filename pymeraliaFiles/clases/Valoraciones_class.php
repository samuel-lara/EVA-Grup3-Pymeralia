<?php
class Valoraciones{
    private $idValoracion;
    private $valoracionCurso;
    private $feedbackCurso;

    /** Constructor de la clase Recursos */
    public function __construct($idValoracion, $valoracionCurso, $feedbackCurso){
        $this->idValoracion = $idValoracion
        $this->valoracionCurso = $valoracionCurso
        $this->feedbackCurso = $feedbackCurso
    }

    /** getter Id Valoracion */
    public function getIdValoracion(){
        return $this->idValoracion;
    }

    /** getter Valoracion Curso */
    public function getValoracionCurso(){
        return $this->valoracionCurso;
    }

    /** getter Feedback Curso */
    public function getFeedbackCurso(){
        return $this->feedbackCurso;
    }

    /** setter Id Valoracion */
    private function setIdValoracion($idValoracion){
        $this->idValoracion = $idValoracion
    }

    /** setter Valoracion Curso */
    private function setValoracionCurso($valoracionCurso){
        $this->valoracionCurso = $valoracionCurso
    }

    /** setter Feedback Curso */
    private function setFeedbackCurso($feedbackCurso){
        $this->feed$feedbackCurso = $feedbackCurso
    }

    /** Método que añade una valoracion nueva */
    private function addValoracion(){

    }

    /** Método que edita una valoracion existente */
    private function editValoracion(){

    }

    /** Método que elimina una valoracion existente*/
    private function deleteValoracion(){

    }

    /** Método que muestra una valoracion existente */
    public function showValoracion(){

    }

    /** Método que asigna una valoracion */
    private function assignValoracion(){

    }

    /** Método que desasigna una valoracion */
    private function unassignValoracion(){

    }
}
?>