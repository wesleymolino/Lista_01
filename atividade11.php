<?php
$preco_produto1 = $_GET['a'];
$quantidade_produto1 = $_GET['b'];
$preco_produto2 = $_GET['c'];
$quantidade_produto2 = $_GET['d'];

    $total1 = $preco_produto1* $quantidade_produto1;
    $total2 = $preco_produto2* $quantidade_produto2;


echo"valor total do produto 1 $total1 <br>";
echo"valor total do produto 2 $total2";