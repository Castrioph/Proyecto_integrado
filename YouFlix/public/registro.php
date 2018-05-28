<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $condition=false;
    $usulogin = $_POST['usulogin'];
    $passlogin = $_POST['passlogin'];
    if ($usulogin!="") {
      $consulta = new consultas();
      $resultado=$consulta->selectUsu($usulogin, $passlogin);
      foreach ($resultado as $fila) {
        if ($usulogin==$fila["usuario"]&&$passlogin==$fila["password"]) {
          echo "<h1>TE HAS CONECTADO BIEN</h1>";
          $condition=true;
        }
      }
      if ($condition==false) {
        echo  "<h1>USUARIO O CONTRASEÑA INCORRECTOS</h1>";
      }
    }else {
    include '../src/model/consultas.php';
    $usuario = $_POST['usuario'];
    $password = $_POST['pass'];
    $repass=$_POST['repass'];
if ($password==$repass) {
  $consulta = new consultas();
  $consulta->insertUsu($usuario,$password);
  echo "<h1>TE HAS REGISTRADO</h1>";
}else {
  echo "<h1>ERROR AL REGISTRARSE</h1>";
}
}


    ?>
<form class="" action="index.html" method="post">
  <button>VOLVER AL INDEX</button>
</form>

  </body>
</html>
