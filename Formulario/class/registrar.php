<?php
error_reporting(0);

/* Conexión a la base de datos. */
$servername= "DESKTOP-RKLGHCC\SQLEXPRESS";
$conexion=array("Database"=>"Usuarios",
                 "UID"=>"sa",
                 "PWD"=>"1234",
                 "CharacterSet"=>"UTF-8");
                                          
$conex=sqlsrv_connect($servername,$conexion);


/* Inserción de los datos en la base de datos. */
$nombre=$_POST['nombre'];
$pais=$_POST['pais'];
$celular=$_POST['celular'];
$email=$_POST['email'];

$query= "INSERT INTO datos (nombre,pais,celular,email) VALUES ('$nombre','$pais','$celular','$email')";
$resultado=sqlsrv_prepare($conex,$query);
    
if (sqlsrv_execute($resultado)) {
    echo "Datos guardados correctamente";
}else {
    echo "Error al guardar los datos";
}


?>


