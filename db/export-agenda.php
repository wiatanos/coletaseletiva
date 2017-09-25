<?php
include 'connect.php';

$query = $conn->prepare("SELECT * FROM agenda");
$query->execute();

$rows = ($query->fetchAll());

    echo "<table  border=\"1\" cellspacing=\"0\" bordercolor=\"#222\" id=\"list\">";
    echo "<tr><th>Nome</th><th>email</th><th>telefone</th><th>".mb_convert_encoding('endereço', 'utf-16', 'utf-8')."</th><th>bairro</th><th>cep</th><th>lat</th><th>long</th><th>peso</th>";

foreach ($rows as $key => $value) {
    echo "<tr>";
    echo '<td>'.mb_convert_encoding($value["nome_empresa"], 'utf-16', 'utf-8').'</td>';
    echo '<td>'.mb_convert_encoding($value["email"],        'utf-16', 'utf-8').'</td>';
    echo '<td>'.mb_convert_encoding($value["telefone"],     'utf-16', 'utf-8').'</td>';
    echo '<td>'.mb_convert_encoding($value["endereco"],     'utf-16', 'utf-8').'</td>';
    echo '<td>'.mb_convert_encoding($value["bairro"],       'utf-16', 'utf-8').'</td>';
    echo '<td>'.mb_convert_encoding($value["cep"],          'utf-16', 'utf-8').'</td>';
    echo '<td>'.mb_convert_encoding($value["lat"],          'utf-16', 'utf-8').'</td>';
    echo '<td>'.mb_convert_encoding($value["lng"],          'utf-16', 'utf-8').'</td>';
    echo '<td>'.mb_convert_encoding($value["peso"],         'utf-16', 'utf-8').'</td>';
    echo "</tr>";
}
    echo "</table>";


$arquivo = 'coletas.xls';
header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/x-msexcel");
header ("Charset: utf-8");
header ("Content-Disposition: attachment; filename={$arquivo}" );
header ("Content-Description: PHP Generated Data" );

?>