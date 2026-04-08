<?php
session_start();

if(!isset($_SESSION['usuario'])){
header("Location: login.php");
exit;
}

include "dbconexao.php";

$result=pg_query($conn,"SELECT * FROM funcionarios");

?>

<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">
<title>Sistema</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="menu">

<a href="home.php">Home</a>
<a href="logout.php">Sair</a>

</div>

<div class="container">

<h2>Cadastro de Funcionários</h2>

<form action="salvar.php" method="POST">

<input type="text" name="nome" placeholder="Nome">

<input type="text" name="cargo" placeholder="Cargo">

<input type="text" name="email" placeholder="Email">

<input type="text" name="telefone" placeholder="Telefone">

<button type="submit">Salvar</button>

</form>

<h2>Funcionários Cadastrados</h2>

<table>

<tr>

<th>ID</th>
<th>Nome</th>
<th>Cargo</th>
<th>Email</th>
<th>Telefone</th>
<th>Ações</th>

</tr>

<?php

while($row=pg_fetch_assoc($result)){

echo "<tr>";

echo "<td>".$row['id']."</td>";
echo "<td>".$row['nome']."</td>";
echo "<td>".$row['cargo']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['telefone']."</td>";

echo "<td>

<a class='btn-excluir' href='excluir.php?id=".$row['id']."'>Excluir</a>

</td>";

echo "</tr>";

}

?>

</table>

</div>

</body>
</html>