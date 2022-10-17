<?php 
include './connect.php';
class Emblemas {
    private $añadir;
    private $editar;
    private $eliminar;
  // Methods
  function construct($añadir, $editar, $eliminar) {
    $this->añadir = $añadir;
    $this->editar = $editar;
    $this->eliminar = $eliminar;
  }

  function get_añadir() {
    return $this->añadir;
  }

  function set_añadir() {
    return $this->añadir;
  }
  function get_editar() {
    return $this->editar;
  }
  function set_editar() {
    return $this->editar;
  }
  function get_eliminar() {
    return $this->eliminar;
  }
  function set_eliminar() {
    return $this->eliminar;
  }
}

?>
