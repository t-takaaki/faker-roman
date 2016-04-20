<?php
require_once './initialize.php';

$faker = Faker\Factory::create('ja_RO');
echo $faker->name();
