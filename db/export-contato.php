<?php
include 'connect.php';

$query = $conn->prepare("SELECT * FROM contato");
$query->execute();

$rows = ($query->fetchAll());

echo "<table  border=\"1\" cellspacing=\"0\" bordercolor=\"#222\" id=\"list\">";
echo "<tr><th>Nome</th><th>email</th><th>Assunto</th><th>mensagem</th></tr>";

foreach ($rows as $key => $value) {
	echo "<tr>";
	echo '<td>'.$value["nome"].'</td>';
	echo '<td>'.$value["email"].'</td>';
	echo '<td>'.$value["assunto"].'</td>';
	echo '<td>'.$value["mensagem"].'</td>';
	echo "</tr>";
}
echo "</table>";

$arquivo = 'contato.xls';
header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/x-msexcel");
header ("Content-Disposition: attachment; filename={$arquivo}" );
header ("Content-Description: PHP Generated Data" );
?>