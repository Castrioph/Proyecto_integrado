<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LISTADO</title>
  </head>
  <body>
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/font-awesome.css">

  <button class="button"><a href="index.html">Indice</a></button>
  <br><br>
    <?php
include '../src/model/consultas.php';
$id_video=$_POST['id_video'];
$consulta = new consultas();
$resultado=$consulta->selecTodo();
foreach ($resultado as $fila)
{
?>
<video width="620" height="440" controls>
<source src="<?=$fila["media_video"]?>" type="video/mp4">
</video>
<?php
  echo "<br>".$fila["titulo"]."<br>";
  echo $fila["fecha"]."<br>";
  echo $fila["descripcion"]."<br>";
?>
<form class="" action="insertarComent.php?id_video=<?=$id_video?>" method="post">
      <input type="text" name="comentarios" id="Coment" placeholder="Comenta..." onFocus="this.placeholder=''"><br>
      <input type="hidden" name="id_video" value="<?= $fila["id_video"]?>">
      <input type="submit" name="Enviar" value="ENVIAR">
      <br><br>
      <h3>Comentarios</h3>
</form>
<?php
}
$resultado=$consulta->selectComent($id_video);
foreach ($resultado as $fila)
{
    echo "<br>".$fila['id_video'];
    echo "  ".$fila['comentarios'];


}
 ?>
  </body>
</html>
