<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fluir";

// criar conexao
$con = mysqli_connect($servername, $username, $password, $dbname);

// verificar conexao
if(!$con){
    die("Conexao Falhou: " . mysqli_connect_error());
}
?>