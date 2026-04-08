<?php
include "dbconexao.php";
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Cadastro de Funcionários</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="menu">

<h2>Cadastro de Funcionários</h2>

<div class="links">

<a href="home.php">Home</a>
<a href="funcionarios_listar.php">Funcionários Cadastrados</a>

</div>

</div>

<div class="box">

<h2>Cadastro de Funcionários</h2>

<form action="salvar.php" method="POST">

<label>Nome</label>
<input type="text" name="nome" required>

<label>Cargo</label>
<input type="text" name="cargo">

<label>Email</label>
<input type="text" name="email">

<label>Telefone</label>
<input type="text" name="telefone">

<label>Situação</label>

<input type="radio" name="situacao" value="true" checked> Ativo
<input type="radio" name="situacao" value="false"> Inativo

<br><br>

<button type="submit">Salvar</button>

</form>

</div>

</body>
</html>