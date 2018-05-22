<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LISTADO</title>
  </head>
  <body>
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <style media="screen">
a{text-decoration: none;}
.button{background-color:#00CED1;}
.button:hover{background-color:#F08080;}

    </style>
  <button class="button"><a href="index.html">Indice</a></button>
  <br><br>
    <?php
include '../src/model/consultas.php';
$titulo=$_GET['titulo'];
$consulta = new consultas();
$resultado=$consulta->select($titulo);
foreach ($resultado as $fila)
{
  echo $fila["titulo"]." ";
  echo $fila["fecha"]."<br>";
  echo $fila["puntuacion"]."<br>";
  echo $fila["descripcion"]."<br>";
  echo $fila["comentarios"]."<br>";
?>
 <video width="620" height="440" controls>
 <source src="<?=$fila["media_video"]?>" type="video/mp4">
 </video>
<form class="" action="insertarComent.php" method="post" onsubmit="return validar()">
      <input type="text" name="Comentarios" id="Coment" value="Comenta..." onFocus="this.value=''"><br>
      <input type="hidden" name="id_videos" value="<?= $_GET["id_videos"]?>">
      <input type="submit" name="Enviar" value="ENVIAR">
      <br><br>
</form>
<?php

}
 ?>
  </body>
</html>
