<?php

//1. Declaramos la variables
$user = '';
$pass = '';
$host ='LAPTOP-A7ED93UJ'; //Aquí debemos poner el nombre de tu servidor (el que aparece en el sqlserver)
$db = 'RecreoExploreIQT';

//2. Realizamos el try-catch para verificar la conexión 
try{
//3. Realizamos la conexión
$conexion = new PDO("sqlsrv:server=$host; database=$db", $user, $pass);
$conexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Conectados MADAFAKERS XD";
}catch(PDOException $e){
    echo 'ERROR: '. $e->getMessage();
}


?>