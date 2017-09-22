<?php
include 'connect.php';


$stmt = $conn->prepare('INSERT INTO `agenda`(nome_empresa, email, telefone, endereco, bairro, lat, lng, cep, material, peso) VALUES(:nome_empresa, :email, :telefone, :endereco, :bairro, :lat, :lng, :cep, :material, :peso)');

 $stmt->bindParam(':nome_empresa', $_POST['nome']);
 $stmt->bindParam(':email', $_POST['email']);
 $stmt->bindParam(':telefone', $_POST['telefone']);
 $stmt->bindParam(':endereco', $_POST['endereco']);
 $stmt->bindParam(':bairro', $_POST['bairro']);
 $stmt->bindParam(':lat', $_POST['lat']);
 $stmt->bindParam(':lng', $_POST['lng']);
 $stmt->bindParam(':cep', $_POST['cep']);
 $stmt->bindParam(':material', $_POST['material']);
 $stmt->bindParam(':peso', $_POST['peso']);
 $stmt->execute();

try{
echo $stmt->rowCount();
header('Location: '.$base_url.'/?=sucess');
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>
