<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>INSERTAR</title>
  </head>
  <body>
    <style media="screen">
a{text-decoration: none;}
.button{background-color:#00CED1;}
.button:hover{background-color:#F08080;}

    </style>
  <button class="button"><a href="index.html">Indice</a></button>
    <button class="Videos"><a href="videos.php">Videos</a></button>
<?php
include '../src/model/consultas.php';

$consulta = new consultas();
$resultado=$consulta->insert($Comentarios=$_POST['Comentarios']);
$resultado=$consulta->select();
echo $Comentarios;

?>

  </body>
</html>
