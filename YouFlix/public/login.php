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
    <script src="js/vue.js"></script>
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
                <a href="#">Premium</a>
            </div>
        </nav>
    </div><!--.contenedor-->
</div><!--.barra-->

<form id="log" class="clearfix" method="post" action="registro.php" >

    <div class="registro">

        <h2 @click="toogleLogup">REGISTAR USUARIO</h2>
        <div class="info_registro" v-if="showLogup">

            <h3><label> Usuario</label></h3>
            <input type="text" name="usuario"><br>
            <h3><label> Contraseña</label></h3>
            <input type="text" name="pass"><br>
            <h3><label> Repetir contraseña</label></h3>
            <input type="text" name="repass"><br>
            <h3><label> Correo electrónico</label></h3>
            <input type="text"><br> <br>
            <button type="submit" class="sesiones_btn">Registrate</button>

            <br>

        </div>

    </div>

    <div class="log_in" id="logIn">
        <h2 @click="toogleLogin">LOG IN</h2>
        <div v-if="showLogin">
            <h3><label> Usuario</label></h3>
            <input type="text" name="usulogin"><br>
            <h3><label> Contraseña</label></h3>
            <input type="text"  name="passlogin"><br> <br>
            <button type="submit" class="sesiones_btn">Inica sesion</button>
            <br>
        </div>
    </div>
</form>


<div class="img_ventajas">
    <img src="images/login.png" alt="Ventajas de ser premium">
</div>


<script>
  function ajusteCuadrado () {
    document.logIn.style.backgroundColor = '#008000'
  }

  new Vue({
    el: '#log',
    data: {
      showLogin: false,
      showLogup: false
    },
    methods: {
      toogleLogin () {
        if (this.showLogin) {
          this.showLogin = false
          document.logIn.style.color = '#008000'
        } else {
          this.showLogin = true
          document.logIn.style.color = '#008000'
        }
      },
      toogleLogup () {
        if (this.showLogup) {
          this.showLogup = false
        } else {
          this.showLogup = true
        }
      }
    }
  })

</script>


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
