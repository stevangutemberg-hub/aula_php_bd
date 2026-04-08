<?php
session_start();
include "db/conexao.php";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'";

$result = pg_query($conn,$sql);

if(pg_num_rows($result) > 0){

$_SESSION['usuario']=$usuario;

header("Location: home.php");

}else{

echo "Login inválido";

}
?>