<?php

include "dbconexao.php";

$nome=$_POST['nome'];
$cargo=$_POST['cargo'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];

$sql="INSERT INTO funcionarios(nome,cargo,email,telefone)
VALUES('$nome','$cargo','$email','$telefone')";

pg_query($conn,$sql);

header("Location: home.php");

?>