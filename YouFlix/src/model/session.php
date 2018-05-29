<?php
/**
 * Created by PhpStorm.
 * User: ellio
* Date: 29/05/2018
* Time: 0:43
*/

session_start();
$_SESSION['usuario']=$_GET['usuario'];
header("Location:../../public/index.php");


?>