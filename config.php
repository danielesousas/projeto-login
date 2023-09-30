<?php 

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'usuarios';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($conexao->errno){
    echo "erro";

} 
else {
    echo "conaxao estabelecida com sucesso";
}
?>