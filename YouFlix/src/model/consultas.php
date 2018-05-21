<?php
include "conectar.php";

class consultas extends conectar
{
  function construct()
  {
    parent::conectar();
  }
  public function select($Titulo)
  {
    return parent::consultar("SELECT * FROM videos WHERE Titulo LIKE '%$Titulo%'");
  }
  public function insert($Comentarios)
{
  return parent::consultar("INSERT INTO videos (Comentarios)
      VALUES ('$Comentarios') where id_videos=$id_videos");
 }
}
?>
