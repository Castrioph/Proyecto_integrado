<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<?php
include '../src/model/consultas.php';
error_reporting(0);
$condition = false;
if ($_POST['usulogin'] != null) {
    $usulogin = $_POST['usulogin'];
    $passlogin = $_POST['passlogin'];
    $consulta = new consultas();
    $resultado = $consulta->selectUsu($usulogin, $passlogin);
    foreach ($resultado as $fila) {
        if ($usulogin == $fila["usuario"] && $passlogin == $fila["password"]) {
            echo "<h1>TE HAS CONECTADO BIEN</h1>";
            $condition = true;
            ?>
        <form class="" action="index.php?session=<?= $usulogin ?>" method="post">
                <button>VOLVER AL INDEX</button>
            </form><?php

        }
    }
    if ($condition == false) {
        echo "<h1>USUARIO O CONTRASEÑA INCORRECTOS</h1>";
        ?>
        <form class="" action="index.php" method="post">
            <button>VOLVER AL INDEX</button>
        </form>
        <?php
    }
} else {
    $usuario = $_POST['usuario'];
    $password = $_POST['pass'];
    $repass = $_POST['repass'];
    if ($password == $repass && $password != null) {
        $consulta = new consultas();
        $consulta->insertUsu($usuario, $password);
        echo "<h1>TE HAS REGISTRADO</h1>";
        ?>
        <form class="" action="index.php" method="post">
            <button>VOLVER AL INDEX</button>
        </form>

        <?php
    } else {
        echo "<h1>ERROR AL REGISTRARSE</h1>";
        ?>
        <form class="" action="index.php" method="post">
            <button>VOLVER AL INDEX</button>
        </form>
        <?php
    }
}

?>

</body>
</html>
