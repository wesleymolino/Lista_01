<?php

$n1 = $_GET['a'];
$n2 = $_GET['b'];
$n3 = $_GET['c'];

$calculo1 = ($n1+$n2)*$n3;
$calculo2 = $n1+($n2*$n3);
echo " o resultado do calculo de ($n1+$n2)*$n3 = $calculo1 <br>";
echo " o resultado do calculo de $n1+($n2*$n3) = $calculo2";