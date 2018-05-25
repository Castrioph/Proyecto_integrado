<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Slider Responsive 2017</title>

    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/font-awesome.css">

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
            <a href="index.html"><img src="images/YOUFLIXFINALOGO.PNG" alt="Logo Youflix"></a>
        </div>

        <nav class="navegacion-principal">
            <div class="categorias">
                <a href="categorias.php">Categorías</a>
                <a href="live.html">LIVE</a>
                <a href="foro.html">Foro</a>
            </div>

            <div class="Buscador">
                <div class="busqueda">
                    <form action="videos.php" method="post">
                        <input type="text" class="form-control input-sm" maxlength="64" placeholder="Search"
                               titulo="$fila['titulo']"/>
                        <button type="submit" class="btn btn-primary btn-sm">Search</button>
                    </form>
                </div>
            </div>

            <div class="logeado">
                <a href="login.html">Log IN</a>
                <a href="login.html">Sign UP</a>
                <a href="#">Premium</a>
            </div>
        </nav>
    </div><!--.contenedor-->
</div>

<h2>Videojuegos</h2>
<div class="flexslider">
    <ul class="slides">
        <?php
        include '../src/model/consultas.php';

        $consulta = new consultas();
        $i = 0;
        $resultado = $consulta->consultar("SELECT * FROM videos WHERE id_categorias=1");
        for ($i; $i < 4; $i++) {
            $fila = $resultado->fetch_assoc();
            ?>

            <li>
                <img src="<?= $fila["miniaturas"] ?>" alt="">
            </li>
            <?php
            $i++;
        }
        ?>
    </ul>
</div>

<h2>Erótico-instructivo</h2>

<div class="flexslider">
    <ul class="slides">
        <?php
        $i = 0;
        $resultado = $consulta->consultar("SELECT * FROM videos WHERE id_categorias=2");
        for ($i; $i < 4; $i++) {
            $fila = $resultado->fetch_assoc();
            ?>

            <li>
                <img src="<?= $fila["miniaturas"] ?>" alt="">
            </li>
            <?php
            $i++;
        }
        ?>
    </ul>
</div>

<h2>Tecnología</h2>

<div class="flexslider">
    <ul class="slides">
        <?php
        $i = 0;
        $resultado = $consulta->consultar("SELECT * FROM videos WHERE id_categorias=3");
        for ($i; $i < 4; $i++) {
            $fila = $resultado->fetch_assoc();
            ?>

            <li>
                <img src="<?= $fila["miniaturas"] ?>" alt="">
            </li>
            <?php
            $i++;
        }
        ?>
    </ul>
</div>


<h2>Tecnología</h2>

<div class="flexslider">
    <ul class="slides">
        <?php
        $i = 0;
        $resultado = $consulta->consultar("SELECT * FROM videos WHERE id_categorias=4");
        for ($i; $i < 4; $i++) {
            $fila = $resultado->fetch_assoc();
            ?>

            <li>
                <img src="<?= $fila["miniaturas"] ?>" alt="" href="video2.php?id_video=<?=$fila['id_videos']?>" >
            </li>
            <?php
            $i++;
        }
        ?>
    </ul>
</div>
</body>
</html>
