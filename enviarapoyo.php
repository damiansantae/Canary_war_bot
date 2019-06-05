<?php
include_once 'class_db.php';


if(isset($_POST['municipios']) != "" && isset($_POST['email']) != ""){
$municipio = $_POST['municipios'];
$email = $_POST['email'];
$verify = DataBase::verificarEmail($email);

if ($verify == 0){
DataBase::enviarApoyo($email, $municipio);   
header("Location: apoyoValido.php");
} else if ($verify == 1){
header("Location: apoyoInvalido.php");
}

}
?>