<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
 

$host = "mysql.escalaweb.com.br";
$usuario = "id17297396_forms";
$senha = "yf8ahqe4";
$banco = "escalaweb16";

$con =  mysqli_connect($host, $usuario, $senha, $banco);

$sql = "INSERT INTO `form` (`firstName`, `lastName`, `email`, `phone`) VALUES ('$firstName', '$lastName', '$email', '$phone');";
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Obrigada";
}

?>