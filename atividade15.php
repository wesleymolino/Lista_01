<?php
$preco_base = $_GET['a'];
$taxa_imposto = $_GET['b'];

$valor_do_imposto = ($preco_base*$taxa_imposto)/100;
$preco_final = $preco_base + $valor_do_imposto;

echo"preçodo produto é $preco_base<br> a taxa de imposto é $taxa_imposto<br> o valor do imposto é $valor_do_imposto <br> e o preço final é $preco_final,";