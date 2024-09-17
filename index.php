<?php

require_once '/vendor/autoload.php';

use Factories\ElectronicProductFactory;
use Factories\ClothingProductFactory;
use App\Client;

// Se puede cambiar entre diferentes fábricas de productos aquí
$factory = new ElectronicProductFactory();
// $factory = new ClothingProductFactory();

$client = new Client($factory);
echo $client->getProductDetails();
echo "\n";