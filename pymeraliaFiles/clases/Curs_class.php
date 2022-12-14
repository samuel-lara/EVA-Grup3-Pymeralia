<?php
class Curs
{
    private $idCurso;
    private $nombreCurso;
    private $descripcionCurso;
    private $imagenCurso;

    /**
     * __construct - Constructor de clase
     *
     * @param  mixed $idCurso
     * @param  mixed $nombreCurso
     * @param  mixed $descripcionCurso
     * @param  mixed $imagenCurso
     * @return void
     */
    public function __construct($idCurso, $nombreCurso, $descripcionCurso, $imagenCurso)
    {
        $this->idCurso = $idCurso;
        $this->nombreCurso = $nombreCurso;
        $this->descripcionCurso = $descripcionCurso;
        $this->imagenCurso = $imagenCurso;
    }

    /**
     * getIdCurso
     *
     * @return void
     */
    public function getIdCurso()
    {
        return $this->idCurso;
    }
    
    /**
     * getNombreCurso
     *
     * @return void
     */
    public function getNombreCurso()
    {
        return $this->nombreCurso;
    }

    /**
     * getDescripcionCurso
     *
     * @return void
     */
    public function getDescripcionCurso()
    {
        return $this->descripcionCurso;
    }

    /**
     * getImagenCurso
     *
     * @return void
     */
    public function getImagenCurso()
    {
        return $this->imagenCurso;
    }

    /**
     * setIdCurso
     *
     * @param  mixed $idCurso
     * @return void
     */
    public function setIdCurso($idCurso)
    {
        $this->idCurso = $idCurso;
    }

    /**
     * setNombreCurso
     *
     * @param  mixed $nombreCurso
     * @return void
     */
    public function setNombreCurso($nombreCurso)
    {
        $this->nombreCurso = $nombreCurso;
    }

    /**
     * setDescripcionCurso
     *
     * @param  mixed $descripcionCurso
     * @return void
     */
    public function setDescripcionCurso($descripcionCurso)
    {
        $this->descripcionCurso = $descripcionCurso;
    }

    /**
     * setImagenCurso
     *
     * @param  mixed $imagenCurso
     * @return void
     */
    public function setImagenCurso($imagenCurso)
    {
        $this->imagenCurso = $imagenCurso;
    }

    /**
     * addCurso - Futuro m??todo para a??adir cursos
     *
     * @return void
     */
    private function addCurso()
    {
    }
    /**
     * editCurso - Futuro m??todo para editar cursos
     *
     * @return void
     */
    private function editCurso()
    {
    }
    /**
     * deleteCurso - Futuro m??todo para eliminar cursos
     *
     * @return void
     */
    private function deleteCurso()
    {
    }
    /**
     * showCursos - Futuro m??todo para mostrar cursos
     *
     * @return void
     */
    public function showCursos()
    {
    }
    /**
     * enableCurso - Futuro m??todo para activar cursos
     *
     * @return void
     */
    private function enableCurso()
    {
    }
    /**
     * disableCurso - Futuro m??todo para desactivar cursos
     *
     * @return void
     */
    private function disableCurso()
    {
    }
    /**
     * assignCurso - Futuro m??todo para asignar cursos
     *
     * @return void
     */
    private function assignCurso()
    {
    }
    /**
     * unassignCurso - Futuro m??todo para desasignar cursos
     *
     * @return void
     */
    private function unassignCurso()
    {
    }
}
