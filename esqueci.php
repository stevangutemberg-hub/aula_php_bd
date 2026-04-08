<?php
include "dbconexao.php";

if(isset($_POST['usuario'])){

$usuario=$_POST['usuario'];
$novasenha=$_POST['senha'];

$sql="UPDATE usuarios SET senha='$novasenha' WHERE usuario='$usuario'";

pg_query($conn,$sql);

echo "Senha alterada com sucesso!";
}

?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Recuperar Senha</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="login-container">

<h2>Recuperar Senha</h2>

<form method="POST">

<input type="text" name="usuario" placeholder="Usuário">

<input type="password" name="senha" placeholder="Nova senha">

<button type="submit">Alterar Senha</button>

</form>

<br>

<a href="login.php">Voltar ao login</a>

</div>

</body>
</html>