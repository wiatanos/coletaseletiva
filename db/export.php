<?php
include 'connect.php';

$query = $conn->prepare("SELECT * FROM agenda");
$query->execute();

$rows = ($query->fetchAll());

$html = array();


foreach ($rows as $key => $value) {
    $html[$key] = "<table  border=\"1\" cellspacing=\"0\" bordercolor=\"#222\" id=\"list\">";
    $html[$key] .= "<tr><th>Nome</th><th>email</th><th>telefone</th><th>endereço</th><th>bairro</th><th>cep</th><th>data da coleta</th><th>peso</th>";
    $html[$key] .= "<tr>";
    $html[$key] .= '<td>'.$value["nome"].'</td>';
    $html[$key] .= '<td>'.$value["email"].'</td>';
    $html[$key] .= '<td>'.$value["telefone"].'</td>';
    $html[$key] .= '<td>'.$value["endereco"].'</td>';
    $html[$key] .= '<td>'.$value["bairro"].'</td>';
    $html[$key] .= '<td>'.$value["cep"].'</td>';
    $html[$key] .= '<td>'.$value["data_coleta"].'</td>';
    $html[$key] .= '<td>'.$value["peso"].'</td>';
    $html[$key] .= "</tr>";
    $html[$key] .= "</table>";
}


$arquivo = 'coletas.xls';
header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/x-msexcel");
header ("Content-Disposition: attachment; filename={$arquivo}" );
header ("Content-Description: PHP Generated Data" );


foreach ($rows as $key => $value) {
    echo $html[$key];
}
?>