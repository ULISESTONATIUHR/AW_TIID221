<?php
/*incluir la infomaciond e el archivo */
include ("conexion.php");
/*mandamos a llmar la funcion conectar*/
$con=conectar();
/*recibir la informacion del formulario*/

$id = $_POST['id'];
$matricula = $_POST['matricula'];
$nombre = $_POST['nombre'];
$apellido_p = $_POST['apellido_p'];
$apellido_m = $_POST['apellido_m'];
$edad  = $_POST['edad'];

$sql = "INSERT INTO alumnos(matricula,nombre,apellido_p,apellido_m,edad) VALUES('$matricula','$nombre','$apellido_p','$apellido_m','$edad')";
$query = mysqli_query($con,$sql);
/*comprobar y direccionar */
if($query){
    Header("Location: alumnos.php");
}
else{
    echo "Error al insertar al alumno";
}