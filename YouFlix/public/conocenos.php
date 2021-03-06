<!DOCTYPE html>
<html lang="en">
<head>
  <style media="screen">
    #lateral {
      width: 600px;
      font-size: 16px;
      margin-left: 290px
    }
  </style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
session_start();
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
                            <input type="text" class="form-control input-sm" maxlength="64" placeholder="Search" name="titulo" />
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
    <div id="lateral">
      <h1>Conócenos</h1>
      <p>YouFlix, aplicación innovadora para la visualización de contenido. Los creadores somos estudiantes con mucha ambición y ganas de aprender y trabajar.
      El contenido de esta página es subido unicamente por el administrador y la gente que acceda a la página tiene la opción de suscribirse e incluso de convertirse
      en premium vendiendo su alma al diablo.</p>
      <p>Como profesionales del sector que somos, garantizamos subir contenido a nuestra página de forma regular. Este contenido estará dividido en varias cateorias y esta accesible para todos,
      incluyendo a los que no sean ni premium ni suscriptores. </p>
    </div>
    <div class="">
      <h2>Creadores</h2>
      <div class="creadores">
        <img src="">
      </div>
    <h3>Elliot</h3>
    <div class="descripcion">
      <p>CEO. Jefe de proyecto y coordinador de trabajos. Le apasionan los juegos de mobil y las barbas bien recortadas.</p>
    </div>
    <div class="creadores">
          <img src="">
        </div>
      <h3>Sebastian</h3>
      <div class="descripcion">
        <p>Jefe de cafes, editor de videos de dudosa procedencia, coordinador de sección legal y amante de las barbas pelirrojas</p>
      </div>
      <div class="creadores">
            <img src="">
          </div>
        <h3>Sandro</h3>
        <div class="descripcion">
          <p>Tester de css, amante del paint y principiante en el mundo de las barbas(Le crece desde los 10 años). Futuro CEO</p>
        </div>
        <div class="creadores">
              <img src="">
            </div>
          <h3>Gabriel</h3>
          <div class="descripcion">
            <p>Experto en dejarlo bonito, gamer profesional, todos los dias son Viernes para el. Muy riguroso con los horarios, nunca llega tarde.</p>
          </div>
          <div class="creadores">
                <img src="">
              </div>
            <h3>Julio</h3>
            <div class="descripcion">
              <p>Coordinador de la base de datos, asistente de contenido audiovisual. Le gustan las barbas.</p>
            </div>
    </div>
<br>
<br>
    <div class="footer clearfix">

       <div class="menu_footer">
           <ul>
                <li><a href="categorias.php"><i class="fas fa-list-ul"></i>Categorias</a></li>
                <li><a href="../src/model/conexionLDAP.php"><i class="fas fa-users"></i>Active Directory</a></li>
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
                <li><a href="conocenos.html">Sobre Nosotros</a></li>
                <li><a href="terminos.php">Terminos de uso y condiciones</a></li>
            </ul>
        </div>
    </div>
       <!-- <i class="far fa-copyright"></i> para el copy

       <i class="fas fa-user-circle"></i> para el usuario en foros
       -->

  </body>
  </html>
