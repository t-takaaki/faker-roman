<?php
require_once './vendor/autoload.php';
require_once 'Roman.php';

use Faker\Provider\Roman as Roman;

// $faker = Faker\Factory::create();

// echo $faker->name;

$faker = new Faker\Generator();
$roman = new Faker\Provider\Roman($faker);
$faker->addProvider($roman);

$roman = new Roman($faker);

var_dump($roman->name());
