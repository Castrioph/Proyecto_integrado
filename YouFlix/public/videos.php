<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>LISTADO</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/font-awesome.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/main.js"></script>
</head>
<body>
<?php
session_start();
?>

    <div class="barra">
        <div class="contenedor clearfix">
            <div class="logo">
                <a href="index.html"><img src="images/YOUFLIXFINALOGO.PNG" alt="Logo Youflix"></a>
            </div>

            <nav class="navegacion-principal">
                <div class="categorias">
                    <a href="categorias.php">Categorías</a>
                    <a href="../src/model/conexionLDAP.php">Active Directory</a>
                </div>

                <div class="Buscador">
                    <div class="busqueda">
                        <form action="videos.php" method="post">
                            <input type="text" class="form-control input-sm" maxlength="64" placeholder="Search" name="titulo" />
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>

                <div class="logeado">
                    <a href="login.php">Log IN</a>
                    <a href="login.php">Sign UP</a>
                    <a href="#"><?= $_SESSION['usuario'] ?></a>
                </div>
            </nav>
        </div><!--.contenedor-->
    </div><!--.barra-->

    <section class="invitados contenedor seccion">
        <h2 class="resultado_busqueda">Resultados de busqueda</h2>
        <ul class="lista-invitados clearfix">
            <?php
                include '../src/model/consultas.php';
                $titulo = $_POST['titulo'];
                $consulta = new consultas();
                $resultado = $consulta->select($titulo);
                foreach ($resultado as $fila) {

                    //echo $fila["titulo"] . "<br>";
                    //echo $fila["fecha"] . "<br>";
                    //echo $fila["descripcion"] . "<br>";
                    //$id_videos = $fila["id_videos"];
            ?>

            <li>
                <div class="invitado">
                    <a href="video.php?id_videos=<?=$fila['id_videos'] ?>"><img src="<?= $fila["miniaturas"] ?>" alt="Miniaturas de los videos">
                    <p><?=$fila['titulo'] ?></p>
                    </a>
                </div>
            </li>
            
            <?php
                }
            ?>
            
            </ul>
        </section><!-- .invitados -->


    <div class="footer clearfix">

       <div class="menu_footer">
           <ul>

                <li><a href="categorias.php"><i class="fas fa-list-ul"></i>Categorias</a></li>

                <li><a href="../src/model/conexionLDAP.php"><i class="fas fa-broadcast-tower"></i>Active Directory</a></li>
            </ul>
       </div>

        <div class="redes_footer">
            <ul>
                <li><a href="#"><i class="fab fa-facebook"></i>Facebook</a></li>
                <li><a href="#"><i class="fab fa-twitter"></i>Twitter</a></li>
                <li><a href="#"><i class="fab fa-instagram"></i>Instagram</a></li>
            </ul>
        </div>

        <div class="barra_form"></div>

        <div class="descrip_footer">
            <ul>
                <li><a href="about.php">Sobre Nosotros</a></li>
                <li><a href="terminos.php">Terminos de uso y condiciones</a></li>
            </ul>
        </div>
    </div>
</body>
</html>
