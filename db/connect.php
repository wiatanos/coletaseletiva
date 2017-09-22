<?php
$servername = "localhost";
$username = "root";
$password = "";
$base_url = "http://" . $_SERVER['SERVER_NAME'] . "/coletaseletiva";

header('Content-Type: text/html; charset=utf-8');

try {
  $conn = new PDO("mysql:host=$servername;dbname=coletaseletiva", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
  echo "Erro na conexão com o banco de dados: " . $e->getMessage();
}
?>
