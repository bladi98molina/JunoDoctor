<?php
require 'conexion.php';
$fecha = date('Y-m-d');
$ubicacion=$_POST['grupo_uicacion'];
$nombre=$_POST['nombre'];
$SQLSEr_comn="INSERT INTO clientes_sin_status(fehca,Nombre,ubicacion) VALUES('$fecha','$nombre','$ubicacion')";
 $recursos = sqlsrv_prepare($con,$SQLSEr_comn);
 if(sqlsrv_execute($recursos)){
    echo  '<script> alert("Su informacion se envio Correctamente");
    location.href=" ../index.php";
</script>';
 }else{
    echo  '<script> alert("error de guardar");
    location.href=" ../index.php";
</script>';
 }

?>