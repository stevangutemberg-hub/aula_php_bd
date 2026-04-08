<?php

include "dbconexao.php";

$id=$_GET['id'];

pg_query($conn,"DELETE FROM funcionarios WHERE id=$id");

header("Location: home.php");

?>