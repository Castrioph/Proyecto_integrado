<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/main.js"></script>
    <title></title>
</head>
<body>

<div class="tabla1">
    
    <div class="logo">
        <a href="index.php"><img src="images/YOUFLIXFINALOGO.PNG" alt="Logo Youflix"></a>
    </div>
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
                echo "<h1 class='titulo_conexion'>TE HAS CONECTADO BIEN</h1>";
                $condition = true;
                ?>
            <form class="form_conexion" action="../src/model/session.php?usuario=<?= $usulogin ?>" method="post">
                    <button class="sesiones_btn">VOLVER AL INDEX</button>
                </form><?php

            }
        }
        if ($condition == false) {
            echo "<h1 class='titulo_conexion'>USUARIO O CONTRASEÑA INCORRECTOS</h1>";
            ?>
            <form class="form_conexion" action="index.php" method="post">
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
            echo "<h1 class='titulo_conexion'>TE HAS REGISTRADO</h1>";
            ?>
            <form class="form_conexion" action="index.php" method="post">
                <button>VOLVER AL INDEX</button>
            </form>

            <?php
        } else {
            echo "<h1 class='titulo_conexion'>ERROR AL REGISTRARSE</h1>";
            ?>
            <form class="form_conexion" action="index.php" method="post">
                <button>VOLVER AL INDEX</button>
            </form>
            <?php
        }
    }

    ?>
</div>
</body>
</html>
