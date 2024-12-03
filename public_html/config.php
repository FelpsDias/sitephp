<?php 
$MYSQLHOST = 'junction.proxy.rlwy.net';
$MYSQLUSER = 'root';
$MYSQL_ROOT_PASSWORD = 'VPRPnXtxIuPJQdsjUlkbOmZDJmuSlvLl';
$MYSQL_DATABASE = 'railway';
$MYSQL_PORT = 33899;

// Criar a conexão
$conexao = new mysqli($MYSQLHOST, $MYSQLUSER, $MYSQL_ROOT_PASSWORD, $MYSQL_DATABASE, $MYSQL_PORT);

// Verificar a conexão
if($conexao->connect_errno){
    echo "Erro na conexão: " . $conexao->connect_error;
}else{
    echo "Conexão efetuada com sucesso";
}
?>