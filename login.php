<?php
session_start();
include "dbconexao.php";

if(isset($_POST['usuario'])){

$usuario=$_POST['usuario'];
$senha=$_POST['senha'];

$sql="SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'";

$result=pg_query($conn,$sql);

if($result && pg_num_rows($result)>0){

$_SESSION['usuario']=$usuario;

header("Location: home.php");

}else{

$erro="Usuário ou senha inválidos";

}

}
?>

<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">
<title>Sistema de Funcionários</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="login-box">

<h2>Sistema de Funcionários</h2>

<?php
if(isset($erro)){
echo "<p class='erro'>$erro</p>";
}
?>

<form method="POST">

<input type="text" name="usuario" placeholder="Usuário" required>

<input type="password" name="senha" placeholder="Senha" required>

<button type="submit">Entrar</button>

</form>

</div>

</body>
</html>