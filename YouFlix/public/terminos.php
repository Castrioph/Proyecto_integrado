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
            <a href="index.html"><img src="images/YOUFLIXFINALOGO.PNG" alt="Logo Youflix"></a>
        </div>

        <nav class="navegacion-principal">
            <div class="categorias">
                <a href="categorias.html">Categorías</a>
                <a href="live.html">Active Directory</a>
            </div>

            <div class="Buscador">
                <div class="busqueda">
                    <form action="videos.php" method="post">
                        <input type="text" class="form-control input-sm" maxlength="64" placeholder="Search"
                               titulo="$fila['titulo']"/>
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
<div class="terminosdeusos">
    <h3><b>Youflix Términos de uso.</b></h3>
    <p>Youflix es una organización lucrativa. En cualquier plataforma de Youflix, nosotros creemos que nuestros espacios
        están siendo usados
        para propósitos legales, respetuosos y legítimos. Mientras se esté utilizando alguno de nuestros sitios web el
        usuario se compromete a
        aceptar estos términos y condiciones. La política será actualizada en base a los términos establecidos con
        anterioridad. Youflix tiene
        el derecho de modificar estos términos en función de su propio criterio. Si no está de acuerdo con alguno de
        estos términos por
        favor no participe en las plataformas de Youflix.
    </p>
    <br>
    <h3><b>Rol de Youflix</b></h3>
    <p><b>1. Ámbito de los términos. </b>Visitando o accediendo a alguno de los sitios web de Youflix usted acepta
        nuestros términos de uso.
        Debes tener al menos 13 años para poder crear una cuenta en Youflix , en caso de no tener la edad requerida para
        registrarse es bienvenido
        a ver los vídeos de Youflix y a disfrutar del sitio. Si es usted menor de 16 años y procedente de la Unión
        Europea solo puede crear una cuenta
        si tiene consentimiento parental.
    </p>
    <p><b>2. Youflix como proveedor de servicios. </b>El sitio web de Youflix puede contener enlaces a proveedores de
        servicios externos,
        además de contenido
        subido por organizaciones, incluyendo vídeos, imágenes, descripciones y otro contenido. Youflix no es
        responsable por el
        contenido que suban a la plataforma terceros.
    </p>
    <br>
    <h3><b>Interactuando con la web y plataformas de Youflix</b></h3>
    <p><b>3. Cuentas de Youflix. </b>En algunas áreas de la web de Youflix puede que usted sea cuestionado para crear
        una cuenta, acceder a
        información, subir algunos datos para ayudar a la web. Si crea una cuenta deber proveer de información precisa y
        completa. En caso de que haya
        creado una contraseña debe mantenerla guardada de forma confidencial para siempre.
    </p>
    <p><b>4. Postear contenido. </b>Usted representa una garantía de que cualquier material que postee a la web de
        Youflix no infringe la
        propiedad intelectual de otros o ninguna ley local. Al postear algún tipo de contenido en la web de Youflix
        usted nos autoriza a usar este
        contenido de forma libre.
    </p>
    <br>
    <h3><b>Problemas con el Copyright y las licencias</b></h3>
    <p><b>5. DMCA avisa. </b>Youflix postea videos de todo el mundo. Mientras Youflix se esfuerza para asegurar que
        todas las ideas posteadas son creíbles,
        basadas en hechos que no infringen la propiedad intelectual de otras personas. Si se da el caso que algún
        contenido infringe la propiedad de terceros
        la Digital Millennium Copyright Act de 1998 provee de un recurso para los poseedores de los derechos. Para
        ejercer este recurso usted o su agente debe
        enviar a Youflix un petición para que el material sea retirado del sitio web o que su acceso sea bloqueado.
    </p>La notificación debe contener la siguiente información:</p>
    <ul>
        <li>Tu nombre, la dirección de correo y el número de teléfono.</li>
        <li>Explicar con detalle la violación de Copyright.</li>
    </ul>
    <br>
    <p><b>6. Licencia para el contenido de Youflix. </b>Las charlas grabadas por Youflix pertenecen a Youflix. Usted
        acepta no distribuir ningún contenido
        de Youflix sin la autorización de la compañía.</p>
    <p><b>7. Licencias para terceros. </b>Youflix expone cierto contenido a través del reproductor de Youtube en la
        plataforma de Youflix. Cualquier que ha
        sido proporcionado por Youtube está sometido a sus términos y condiciones de uso.</p>
    <p><b>8. Acuerdo completo. </b>Estos términos de uso constituyen un acuerdo completo entre los usuarios y la web de
        Youflix regido por las leyes españolas.</p>
</div>
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
            <li><a href="conocenos.php">Sobre Nosotros</a></li>
            <li><a href="terminos.php">Terminos de uso y condiciones</a></li>
        </ul>
    </div>
</div>
</body>
</html>
