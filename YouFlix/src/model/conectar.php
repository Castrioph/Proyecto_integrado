<?php
require_once "BD.php";
class conectar{
  private $db;
  private $conector;
  private $consulta;
  function __construct(){
    $this->db=new BD();
    $this->db->conectar();
    $this->conector=$this->db->getConector();
  }

public function consultar($query)
{
  $this->consulta=$query;
  $resultado=$this->conector->query($this->consulta);
  return $resultado;
}
}

 ?>
