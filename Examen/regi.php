<?php
$nombre=$_POST['usuario'];
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
$neim=$_POST['nombre'];
$rol=$_POST['rol'];


$conexion=mysqli_connect("localhost:3308","root","","registro");

$consulta="INSERT INTO usuario(usuario, correo, contra, nombre, idrol) 
VALUES ('$nombre','$correo','$contrasena','$neim','$rol')";
$resultado=mysqli_query($conexion,$consulta);

if($resultado){
    ?>
    <h3>Registro exitoso</h3>
    <?php
    include("Reg.html");
}else{
    include("Reg.html");
    ?>
    
    <h3>Ha ocurrido un error</h3>
    <?php
}
?>