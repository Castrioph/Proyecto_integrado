<?php
include "../src/model/consultas.php";
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Slider Responsive 2017</title>

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
</head>
<body>

<div class="barra">
    <div class="contenedor clearfix">
        <div class="logo">
            <a href="index.php"><img src="images/YOUFLIXFINALOGO.PNG" alt="Logo Youflix"></a>
        </div>

        <nav class="navegacion-principal">
            <div class="categorias">
                <a href="categorias.php">Categorías</a>
                <a href="../src/model/conexionLDAP.php">Active Directory</a>
            </div>

            <div class="Buscador">
                <div class="busqueda">
                    <form action="videos.php" method="post">
                        <input type="text" class="form-control input-sm" maxlength="64" placeholder="Search"
                               name="titulo"/>
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>

            <div class="logeado">
                <a href="login.php">Log IN</a>
                <a href="login.php">Sign UP</a>
                <a href="../src/model/sessiondestroy.php">Log out</a>
                <a href="#"><?= $_SESSION['usuario'] ?></a>
            </div>
        </nav>
    </div><!--.contenedor-->
</div><!--.barra-->


<div class="flexslider clearfix">
    <ul class="slides">
        <?php
        $consulta = new consultas();
        $resultado = $consulta->consultar("SELECT * FROM videos WHERE id_categorias=1");
        $fila = $resultado->fetch_assoc();
        ?>
        <li>
            <a href="video.php?id_videos=<?= $fila['id_videos'] ?>"><img src="<?= $fila["miniaturas"] ?>" alt=""></a>
            <section class="caption">
                <div class="textoSlide"><h2><?=$fila['titulo']?></h2></div>
            </section>
        </li>

        <?php
        $resultado = $consulta->consultar("SELECT * FROM videos WHERE id_categorias=2");
        $fila = $resultado->fetch_assoc();
        ?>
        <li>
            <a href="video.php?id_videos=<?= $fila['id_videos'] ?>"><img src="<?= $fila["miniaturas"] ?>" alt=""></a>
            <section class="caption">
                <div class="textoSlide"><h2><?=$fila['titulo']?></h2></div>
            </section>
        </li>

        <?php
        $resultado = $consulta->consultar("SELECT * FROM videos WHERE id_categorias=3");
        $fila = $resultado->fetch_assoc();
        ?>

        <li>
            <a href="video.php?id_videos=<?= $fila['id_videos'] ?>"><img src="<?= $fila["miniaturas"] ?>" alt=""></a>
            <section class="caption">
                <div class="textoSlide"><h2><?=$fila['titulo']?></h2></div>
            </section>
        </li>

            <?php
            $resultado = $consulta->consultar("SELECT * FROM videos WHERE id_categorias=4");
            $fila = $resultado->fetch_assoc();
            $fila = $resultado->fetch_assoc();
            ?>
        <li>
            <a href="video.php?id_videos=<?= $fila['id_videos'] ?>"><img src="<?= $fila["miniaturas"] ?>" alt=""></a>
            <section class="caption">
                <div class="textoSlide"><h2><?=$fila['titulo']?></h2></div>
            </section>
        </li>

    </ul>
</div>

<div class="footer clearfix">

    <div class="menu_footer">
        <ul>

            <li><a href="categorias.php"><i class="fas fa-list-ul"></i>Categorias</a></li>

            <li><a href="../src/model/conexionLDAP.php"><i class="fas fa-broadcast-tower"></i>Active Directory</a></li>
        </ul>
    </div>

    <div class="redes_footer">
        <ul>
            <li><a href="https://www.facebook.com/you.flix.77"><i class="fab fa-facebook"></i>Facebook</a></li>
            <li><a href="#"><i class="fab fa-twitter"></i>Twitter</a></li>
            <li><a href="https://www.instagram.com/youflixnofake/?hl=es"><i class="fab fa-instagram"></i>Instagram</a></li>
        </ul>
    </div>

    <div class="barra_form"></div>

    <div class="descrip_footer">
        <ul>
            <li><a href="conocenos.php">Sobre Nosotros</a></li>
            <li><a href="terminos.php">Terminos de uso y condiciones</a></li>
        </ul>
    </div>
</div>
<!-- <i class="far fa-copyright"></i> para el copy

<i class="fas fa-user-circle"></i> para el usuario en foros
-->

</body>
</html>