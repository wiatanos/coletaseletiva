<?php
include 'connect.php';

$query = $conn->prepare("SELECT * FROM agenda");
$query->execute();

$rows = ($query->fetchAll());

    echo "<table  border=\"1\" cellspacing=\"0\" bordercolor=\"#222\" id=\"list\">";
    echo "<tr><th>Nome</th><th>email</th><th>telefone</th><th>endereço</th><th>bairro</th><th>cep</th><th>lat</th><th>long</th><th>peso</th>";

foreach ($rows as $key => $value) {
    echo "<tr>";
    echo '<td>'.$value["nome_empresa"].'</td>';
    echo '<td>'.$value["email"].'</td>';
    echo '<td>'.$value["telefone"].'</td>';
    echo '<td>'.$value["endereco"].'</td>';
    echo '<td>'.$value["bairro"].'</td>';
    echo '<td>'.$value["cep"].'</td>';
    echo '<td>'.$value["lat"].'</td>';
    echo '<td>'.$value["lng"].'</td>';
    echo '<td>'.$value["peso"].'</td>';
    echo "</tr>";
}
    echo "</table>";


$arquivo = 'coletas.xls';
header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/x-msexcel");
header ("Content-Disposition: attachment; filename={$arquivo}" );
header ("Content-Description: PHP Generated Data" );

?>