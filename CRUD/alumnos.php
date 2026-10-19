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
           


            <?php
                while($row=mysqli_fetch_array($query)){
            ?>
                <tr>
                    <th><?php  echo $row['id']?></th>
                    <th><?php  echo $row['matricula']?></th>
                    <th><?php  echo $row['nombre']?></th>
                    <th><?php  echo $row['apellido_p']?></th>
                    <th><?php  echo $row['apellido_m']?></th>
                    <th><?php  echo $row['edad']?></th>    
                    <td>
                       <a href="Delete.php?id=<?php echo $row['id'] ?>">eliminar</a>
                        <br>
                        <a href="editar.php?id=<?php echo $row['id'] ?>">editar</a>
                        </td>                                  
                </tr>
            <?php 
                }
            ?>
        
        

        </body>
</table>
<h1>FORMULARIO</h1>
<form action="insertar.php" method="POST">
    <input type="text" class="form-control" name="matricula" placeholder="matricula">
    <input type="text" class="form-control" name="nombre" placeholder="nombre">
    <input type="text" class="form-control" name="apellido_p" placeholder="apellido_paterno">
    <input type="text" class="form-control" name="apellido_m" placeholder="apellido_materno">
    <input type="text" class="form-control" name="edad" placeholder="edad">
   <button type="submit" class="btn btn-primary">GUARDAR</button>
</form>
</html>

        
