<?php
include 'connect.php';

$stmt = $conn->prepare('INSERT INTO `agenda`(nome_empresa, email, telefone, endereco, bairro, lat, lng, cep, data_coleta, peso) VALUES(:nome, :email, :telefone, :endereco, :bairro, :lat, :lng, :cep, :data_coleta, :peso)');

 $stmt->bindParam(':nome', $_POST['nome']);
 $stmt->bindParam(':email', $_POST['email']);
 $stmt->bindParam(':telefone', $_POST['telefone']);
 $stmt->bindParam(':endereco', $_POST['endereco']);
 $stmt->bindParam(':bairro', $_POST['bairro']);
 $stmt->bindParam(':lat', $_POST['lat']);
 $stmt->bindParam(':lng', $_POST['lng']);
 $stmt->bindParam(':cep', $_POST['cep']);
 $stmt->bindParam(':data_coleta', $_POST['data_coleta']);
 $stmt->bindParam(':peso', $_POST['peso']);
 $stmt->execute();

try{
echo $stmt->rowCount();
header('Location: '.$base_url.'/?=sucess');
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>
