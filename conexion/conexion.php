<?php

// Primera aproximación
// class Cconexion{

//     static function ConexionBD(){
//         $host = 'peoplebpo.altitude.com';
//         $dbname = 'rdb2';
//         $username = 'bq_PeopleBPO';
//         $pasword = '$A3R+tROx1';
//         $puerto = 9433;

//         try{
//             $conn = new PDO ("sqlsrv:Server=$host,$puerto;Database=$dbname;Encrypt=false", $username,$pasword);
//             echo "Se conectó correctamente a la base de datos";
//         }
//         catch(PDOException $exp){
//             echo("No se logró conectar correctamente con la base de datos: $dbname, error: $exp");
//         }
        
//         return $conn;
//     }

// }


//Funcionando
$contraseña         = "413471*IIO";
$usuario            = "sa";
$nombreBaseDeDatos  = "pruebas_parzibyte";
$rutaServidor       = "147.182.192.121";
try {
    $base_de_datos = new PDO("sqlsrv:server=$rutaServidor;database=$nombreBaseDeDatos;Encrypt=false", $usuario, $contraseña);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Se conectó correctamente a la BBDD: $nombreBaseDeDatos"; 
} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}

// $serverName = "147.182.192.121";
// $connectionInfo = array( "Database"=>"pruebas_parzibyte", "UID"=>"sa", "PWD"=>"413471*IIO");
// $conn = sqlsrv_connect( $serverName, $connectionInfo );

// if( $conn === false ) {
//     die( print_r( sqlsrv_errors(), true));
// }

?>