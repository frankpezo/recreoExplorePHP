<?php
//1. Incluimos la bd
include("../conexion.php");

//2. Comprobamos que los campos no estén vacíos
if(!isset($_POST['nombre']) || !isset($_POST['email']) || !isset($_POST['password'])){
    exit();
}

//2.1. Guardamos los datos en las variables
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];

//3. Realizamos la sentencia para poder insertar los datos a la bd
$sentencia = $conexion->prepare("INSERT INTO Empresa(nombreEmpresa, emailEmpresa, passwordEmpresa) VALUES (?,?,?)");
$resultado = $sentencia->execute([$nombre, $email, $password]);

//3.1. Creamos un arreglo para comprobar que todo va bien
$arr = array();
if($resultado === true){
    $arr['success'] = "true";
}

print(json_encode($arr));

?>