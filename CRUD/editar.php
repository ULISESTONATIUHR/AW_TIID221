
<?php
include("conexion.php");

$con = conectar();

if(isset($_POST['actualizar'])){

    $id = $_POST['id'];
    $matricula = $_POST['matricula'];
    $nombre = $_POST['nombre'];
    $apellido_p = $_POST['apellido_p'];
    $apellido_m = $_POST['apellido_m'];
    $edad = $_POST['edad'];

    $sql = "UPDATE alumnos SET matricula='$matricula',
    nombre='$nombre',
    apellido_p='$apellido_p',
    apellido_m='$apellido_m',
    edad='$edad'
    WHERE id='$id'";

    $query = mysqli_query($con, $sql);

    if($query){
        header("location: alumnos.php");
        exit();
    }else{
        echo "Error al editar el alumno: " . mysqli_error($con);
    }
}

/* Buscar los datos del alumno */
$id = $_GET['id'];

$sql = "SELECT * FROM alumnos WHERE id='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="editar.php?id=<?php echo $id; ?>" method="POST">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<input type="text" name="matricula" value="<?php echo $row['matricula']; ?>" placeholder="Matricula">

 <input type="text" name="matricula" value="<?php echo $row['nombre']; ?>" placeholder="Matricula">
 <input type="text" name="apellido_m" value="<?php echo $row['apellido_p']; ?>" placeholder="Apellido materno">
<input type="text" name="apellido_m" value="<?php echo $row['apellido_m']; ?>" placeholder="Apellido materno">
<input type="text" name="edad" value="<?php echo $row['edad']; ?>" placeholder="Edad">

<button type="submit" name="actualizar">ACTUALIZAR</button>
               </form>
               <a href="alumnos.php">REGRESAR</a>
</body>   
</html>