<?php

require_once ("vendor/autoload.php");


use carlospetrucio\findcep\Search;

$busca = new Search;
$resultado = $busca->getAddressFromZipcode('09970300');

print_r($resultado);