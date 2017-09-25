<?php 
	include 'connect.php';

	$stmt = $conn->prepare('INSERT INTO `contato`(nome, endereco, bairro, cep, lat, lng, email, assunto, mensagem) VALUES(:nome, :endereco, :bairro, :cep, :lat, :lng, :email, :assunto, :mensagem)');

	 $stmt->bindParam(':nome', $_POST['nome']);
	 $stmt->bindParam(':endereco', $_POST['endereco']);
	 $stmt->bindParam(':bairro', $_POST['bairro']);
	 $stmt->bindParam(':cep', $_POST['cep']);
	 $stmt->bindParam(':lat', $_POST['lat']);
	 $stmt->bindParam(':lng', $_POST['lng']);
	 $stmt->bindParam(':email', $_POST['email']);
	 $stmt->bindParam(':assunto', $_POST['assunto']);
	 $stmt->bindParam(':mensagem', $_POST['mensagem']);
	 $stmt->execute();

	 header('Location: '.$base_url.'/?=mail_ok');
?>