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
<?php
include "../src/model/session.php";
if(!isset($session)){
    $session= new session('');
}else{
    $session->setUsername($_POST['session']);
    echo $_POST['session'];
}

?>
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
                <a href="#"><?=$session->getUsername();?></a>
            </div>
        </nav>
    </div><!--.contenedor-->
</div><!--.barra-->


<div class="flexslider clearfix">
    <ul class="slides">

        <li>
            <img src="images/1.jpg" alt="">
            <section class="caption">
                <div class="textoSlide"><h2>En boca cerrada no entran moscas pero sin p***as como roscast#1</h2></div>
            </section>
        </li>

        <li>
            <img src="images/2.jpg" alt="">
            <section class="caption">
                <div class="textoSlide"><h2>Lorem slider ali baba ar la vibora se va pon el culo acia atrat#2</h2></div>
            </section>
        </li>

        <li>
            <img src="images/3.jpg" alt="">
            <section class="caption">
                <div class="textoSlide"><h2>En boca cerrada no entran moscas pero sin p***as como roscast#3</h2></div>
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
            <li><a href="https://www.instagram.com/youflixnofake/?hl=es"><i class="fab fa-twitter"></i>Twitter</a></li>
            <li><a href="#"><i class="fab fa-instagram"></i>Instagram</a></li>
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