<?php
$peso = $_GET['a'];
$altura = $_GET['b'];

$imc = $peso/(pow($altura,2));


echo "Seu IMC é: $imc" ;