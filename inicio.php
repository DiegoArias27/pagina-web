<?php
include('conection.php');

$correo= $_POST["correo"];
$contraseña= $_POST["contraseña"];

$consulta="SELECT * FROM usuario WHERE Correo='$correo' and Contraseña='$contraseña'";
$resultado=mysqli_query(OpenCon(), $consulta);
$filas=mysqli_num_rows($resultado);



if($filas>0){
    echo "<script>alert('Se ingreso correctamente.');
    window.location='/';</script>";
}
else {
    echo "<script>alert('Contraseña o Correo incorrectos');
    window.history.go(-1);</script>";
    
}

CloseCon();
?>