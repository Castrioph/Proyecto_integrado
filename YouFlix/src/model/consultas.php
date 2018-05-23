<?php
include "conectar.php";

class consultas extends conectar
{
  function construct()
  {
    parent::conectar();
  }
  public function select($titulo)
  {
    return parent::consultar("SELECT * FROM videos WHERE titulo LIKE '%$titulo%'");
  }
  public function selecTodo()
  {
    return parent::consultar("SELECT * FROM videos");
  }
  public function insert($id_video, $comentarios)
{
  return parent::consultar("INSERT INTO comentarios(comentarios,id_video)
      VALUES ('$comentarios',$id_video)");
 }
 public function selectComent($id_video)
 {
   return parent::consultar("SELECT * FROM comentarios WHERE id_video=$id_video");
 }
}
?>
