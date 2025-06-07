<?php
$salario_base = $_GET['a'];
$percentua_aumento = $_GET['b'];

$valor_do_aumento = ($salario_base * $percentua_aumento)/100;
$novo_salario = $salario_base + $valor_do_aumento;

echo "valor do salario é: $salario_base <br> a porcentagem de aumento é $percentua_aumento % <br>o valor do aumento é $valor_do_aumento <br>o valor total do salario $novo_salario" ;