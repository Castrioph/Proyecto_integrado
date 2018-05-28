<?php
/**
 * Created by PhpStorm.
 * User: ellio
* Date: 29/05/2018
* Time: 0:43
*/

/*Probando a crear una sesion*/

class session{
    private $username ="";

    function __construct($username)
    {
        $this->username = $username;
    }

    function getUsername(){
        return $this->username;
    }

    function setUsername($username){
        $this->username = $username;
    }
}