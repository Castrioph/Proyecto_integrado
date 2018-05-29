<?php
/**
 * Created by PhpStorm.
 * User: ellio
 * Date: 29/05/2018
 * Time: 3:06
 */
session_start();
$_SESSION['usuario']="";
header("Location:../../public/index.php");
?>