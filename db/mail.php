<?php 
	include 'connect.php';

	$stmt = $conn->prepare('INSERT INTO `contato`(nome, email, assunto, mensagem) VALUES(:nome, :email, :assunto, :mensagem)');

	 $stmt->bindParam(':nome', $_POST['nome']);
	 $stmt->bindParam(':email', $_POST['email']);
	 $stmt->bindParam(':assunto', $_POST['assunto']);
	 $stmt->bindParam(':mensagem', $_POST['mensagem']);
	 $stmt->execute();

	 header('Location: '.$base_url.'/?=mail_ok');
?>