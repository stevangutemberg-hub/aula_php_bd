<?php

$conn = pg_connect("host=localhost port=5432 dbname=funcionarios user=phpuser password=123");

if($conn){
    echo "Conectado com sucesso!";
}else{
    echo "Erro na conexão";
}

?>