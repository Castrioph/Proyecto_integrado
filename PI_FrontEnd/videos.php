<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LISTADO</title>
  </head>
  <body>
    <style media="screen">
a{text-decoration: none;}
.button{background-color:#00CED1;}
.button:hover{background-color:#F08080;}

    </style>
  <button class="button"><a href="">Indice</a></button>
  <br><br>
    <?php
include '../src/model/consultas.php';
$Titulo=$_POST['Titulo'];

$consulta = new consultas();
$resultado=$consulta->select($Titulo);
foreach ($resultado as $fila)
{
  echo "Título: ".$fila["Titulo"]."<br>";
  echo "Descripción: ".$fila["Descripcion"]."<br>";
  echo "Puntuación: ".$fila["Puntuacion"]."<br>";
<<<<<<< HEAD
  echo "Fecha: ".$fila["Fecha"]."<br><br>";
}
  ?>
=======
  echo "Fecha: ".$fila["Fecha"]."<br>";
?>
<form class="" action="insertarComent.php" method="post" onsubmit="return validar()">
      <input type="text" name="Comentarios" id="Coment" value="Perra Comenta..." onFocus="this.value=''"><br>
      <input type="hidden" name="id_videos" value="<?= $_GET["id_videos"]?>">
      <br><br>
</form>
<?php
echo "<a href='videos.php?id=".$fila['Titulo']."'>Comentar</a> <br> <br>";
}
 ?>
>>>>>>> master
  </body>
</html>
