<?php
$valor_original = $_GET['a'];
$percentua_desconto = $_GET['b'];

$valor_desconto = ($valor_original * $percentua_desconto)/100;
$valor_final = $valor_original-$valor_desconto;

echo "valor do produto é: $valor_original <br> a porcentagem de desconto é $percentua_desconto % <br>o valor do desconto é $valor_desconto <br>o valor total $valor_final" ;