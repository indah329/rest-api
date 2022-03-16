<?php

$data= file_get_contents('coba.json');
$pelajar = json_decode($data, true);

var_dump($pelajar);
echo $pelajar[0]["pembimbing"]["pembimbing1"];

?>