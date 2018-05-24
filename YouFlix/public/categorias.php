<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
                            <input type="text" class="form-control input-sm" maxlength="64" placeholder="Search" titulo="$fila['titulo']" />
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

				$resultado=$consulta->selecTodo();
				foreach ($resultado as $fila)
				{
					?>
					<li>
				<img src="<?=$fila["miniaturas"]?>" alt="">
				<section class="caption">
				<div class="textoSlide"><a href ="video2.php?id_video=<?=$id_video?>"><h2>MARKESET</h2></a></div>
			</section>
		</li>
					<?php
					}
					 ?>
		</ul>
	</div>

    <h2>Erótico-instructivo</h2>

		<div class="flexslider">
			<ul class="slides">
					<?php

					$resultado=$consulta->selecTodo();
					foreach ($resultado as $fila)
					{
						?>
						<li>
					<img src="<?=$fila["miniaturas"]?>" alt="">
					<section class="caption">
					<div class="textoSlide"><a href ="video2.php?id_video=<?=$id_video?>"><h2>MARKESET</h2></a></div>
				</section>
			</li>
						<?php
						}
						 ?>
			</ul>
		</div>

    <h2>Tecnología</h2>

		<div class="flexslider">
			<ul class="slides">
					<?php

					$resultado=$consulta->selecTodo();
					foreach ($resultado as $fila)
					{
						?>
						<li>
					<img src="<?=$fila["miniaturas"]?>" alt="">
					<section class="caption">
					<div class="textoSlide"><a href ="video2.php?id_video=<?=$id_video?>"><h2>MARKESET</h2></a></div>
				</section>
			</li>
<<<<<<< HEAD:YouFlix/public/categorias.php
						<?php
						}
						 ?>
			</ul>
		</div>
=======

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
                <li><a href="#"><i class="fas fa-list-ul"></i>Categorias</a></li>
                <li><a href="#"><i class="fas fa-users"></i>Foro</a></li>
                <li><a href="#"><i class="fas fa-broadcast-tower"></i>LIVE</a></li>
            </ul>
       </div>

        <div class="redes_footer">
            <ul>
                <li><a href="#"><i class="fab fa-facebook"></i>Faceboock</a></li>
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
>>>>>>> b1f455f0fed4ae2d08b4412d9f1be3feb6f23be9:YouFlix/public/categorias.html
</body>
</html>
