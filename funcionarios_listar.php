<?php
include "dbconexao.php";

$sql="SELECT * FROM funcionarios";

$result=pg_query($conn,$sql);
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Funcionários Cadastrados</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="menu">

<h2>Cadastro de Funcionários</h2>

<div class="links">

<a href="home.php">Home</a>
<a href="funcionarios_cadastro.php">Novo Funcionário</a>

</div>

</div>

<div class="box">

<h2>Funcionários Cadastrados</h2>

<table>

<tr>

<th>ID</th>
<th>Nome</th>
<th>Cargo</th>
<th>Email</th>
<th>Situação</th>
<th>Ações</th>

</tr>

<?php

while($row=pg_fetch_assoc($result)){

echo "<tr>";

echo "<td>".$row['id']."</td>";
echo "<td>".$row['nome']."</td>";
echo "<td>".$row['cargo']."</td>";
echo "<td>".$row['email']."</td>";

if($row['situacao']==true){
echo "<td>Ativo</td>";
}else{
echo "<td>Inativo</td>";
}

echo "<td>

<a href='excluir.php?id=".$row['id']."'>Excluir</a>

</td>";

echo "</tr>";

}

?>

</table>

</div>

</body>
</html>