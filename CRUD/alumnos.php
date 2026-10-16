<?php
/*incluir la infomaciond e el archivo */
include ("conexion.php");
/*mandamos a llmar la funcion conectar*/
$con=conectar();
/*Dame todo loque tengas de aumnos*/
$sql = "SELECT * FROM alumnos";
$query =mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Matricula</th>
                <th>Nombre</th>
                <th>Apellido_Paterno</th>
                <th>Apellido_Materno</th>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
               
                <td>1</td>
            
            <td>125053572</td>
           
            <td>Ulises</td>
            
            <td>Acatecatl</td>
         
             <td>Ramirez</td>
           
            <td>19</td>
            
            <td>editar eliminar</td>

        </tr>
        
        

        </body>
</html>

        
