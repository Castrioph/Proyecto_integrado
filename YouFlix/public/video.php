<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>LISTADO</title>
</head>
<body>
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/font-awesome.css">
<button class="button"><a href="index.php">Indice</a></button>
<br><br>
<?php
include '../src/model/consultas.php';
$id_videos = $_GET['id_videos'];

$consulta = new consultas();
$resultado = $consulta->consultar("SELECT * FROM videos WHERE id_videos=$id_videos");
foreach ($resultado as $fila) {
    ?>
    <video width="620" height="440" controls>
        <source src="<?= $fila["media_video"] ?>" type="video/mp4">
    </video>
    <?php
    echo "<br>" . $fila["titulo"] . "<br>";
    echo $fila["fecha"] . "<br>";
    echo $fila["descripcion"] . "<br>";
    ?>
    <form class="" action="insertarComent.php?titulo=<?= $fila['titulo'] ?>&id_video=<?= $id_videos ?>" method="post">
        <input type="text" name="comentarios" id="Coment" placeholder="Comenta..." onFocus="this.placeholder=''"><br>
        <input type="hidden" name="id_video" value="<?= $fila["id_videos"] ?>">
        <input type="submit" name="Enviar" value="ENVIAR">
        <br><br>
        <h3>Comentarios</h3>
    </form>
    <?php

}
?>
</body>
</html>
