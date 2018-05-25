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
    a {
        text-decoration: none;
    }

    .button {
        background-color: #00CED1;
    }

    .button:hover {
        background-color: #F08080;
    }

</style>
<button class="button"><a href="index.html">Indice</a></button>
<br><br>
<?php
include '../src/model/consultas.php';
$titulo = $_POST['titulo'];
$consulta = new consultas();
$resultado = $consulta->select($titulo);
foreach ($resultado as $fila) {

    echo $fila["titulo"] . " ";
    echo $fila["fecha"] . "<br>";
    echo $fila["descripcion"] . "<br>";
    $id_videos = $fila["id_videos"];
    ?>
    <a href="video.php?id_videos=<?=$fila['id_videos'] ?>"><img
                src="<?= $fila["miniaturas"] ?>"
                alt=""></a>
    <br><br>
    <?php

}

?>
</body>
</html>
