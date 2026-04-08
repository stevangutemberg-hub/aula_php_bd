<?php

/* ==============================
   CONFIGURAÇÃO DO BANCO
   ============================== */

$host = "localhost";
$porta = "5432";
$banco = "nova";
$usuario = "postgres";
$senha = "123456";


/* ==============================
   CONEXÃO COM POSTGRESQL
   ============================== */

$conexao = "host=$host port=$porta dbname=$banco user=$usuario password=$senha";

$conn = pg_connect($conexao);


/* ==============================
   VERIFICAÇÃO DA CONEXÃO
   ============================== */

if (!$conn) {

    echo "<h3>❌ Erro ao conectar com o PostgreSQL</h3>";
    echo "Verifique:<br>";
    echo "- Se o PostgreSQL está ligado<br>";
    echo "- Se o nome do banco está correto<br>";
    echo "- Se o usuário e senha estão corretos<br>";

    exit;

}

/* conexão funcionando */
// echo "✅ Conectado com sucesso";

?>