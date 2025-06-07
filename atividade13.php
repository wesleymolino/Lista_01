<?php
$temperatura_celsius = $_GET['a'];
$temperatura_fahrenheit = ($temperatura_celsius * 9/5) + 32;

echo"a temperatura é <br> $temperatura_celsius ° celsius <br>  $temperatura_fahrenheit ° fahrenheit";