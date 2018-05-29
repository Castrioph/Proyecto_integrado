<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>LISTADO</title>
	<title>Slider Responsive 2017</title>

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
error_reporting(0);

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
    
    <div>
        
        <div class="publicidad_pleb"><p>Publicidad para la PLEB</p></div>

        <?php
            include '../src/model/consultas.php';
            $id_videos=$_GET['id_videos'];

            $consulta = new consultas();
            $resultado = $consulta->consultar("SELECT * FROM videos WHERE id_videos=$id_videos");
            foreach ($resultado as $fila) {
        ?>

        <div class="reproductor_de_video">
            <video width="620" height="440" controls>
                <source src="<?= $fila["media_video"] ?>" type="video/mp4">
            </video>
        </div><!-- .reproductor_de_video -->

        <div class="contenedor_video">
        <?php
        //echo "<br>" . $fila["titulo"] . "<br>";
        //echo $fila["fecha"] . "<br>";
        //echo $fila["descripcion"] . "<br>";
        ?>
        <h2><?= $fila['titulo'] ?></h2>

        <form action="insertarComent.php?titulo=<?= $fila['titulo'] ?>&id_video=<?= $id_videos ?>" method="post">

            <i class="fas fa-user-circle"></i>
            <input type="text" name="comentarios" id="Coment" placeholder="Comenta..." onFocus="this.placeholder=''"><br>
            <input type="hidden" name="id_video" value="<?= $fila["id_videos"] ?>">
            <input class="caja_comenta sesiones_btn" type="submit" name="Enviar" value="COMENTAR">
            <br><br>
            <h3>Comentarios</h3>
        </form>
        <?php
            }
        ?>
        </div><!-- .contenedor -->
    </div><!-- .caja -->
    
    
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
    </div><!-- .footer -->
</body>
</html>
