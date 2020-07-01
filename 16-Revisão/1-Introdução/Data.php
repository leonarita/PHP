<?php

echo date('d/m/y') . PHP_EOL;

$data = new DateTime();
var_dump($data);
echo $data->format('d/m/y H:i:s') . PHP_EOL;

$intervalo = new DateInterval('PT5M');
$data->add($intervalo);
var_dump($data);

$intervalo = new DateInterval('P5Y10M5D10H50M10S');
$data->sub($intervalo);
var_dump($data);