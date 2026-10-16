<?php

function conectar(){
    /*informacion del servidor*/
    $shots="localhost";
    $user="root";
    $pass="";
/*base de datos a la que se conectara*/
    $db="aw221";
/*permite conectar a la base de datos*/
 $con=mysqli_connect($shots,$user,$pass,$db);
/*le vamos a decir que la BD y la informacion de*/
    mysqli_select_db($con,$db);
    return $con;
}
?>