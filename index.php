<?php
require_once './loader.php';

$faker = Faker\Factory::create('ja_RO');
echo $faker->name();
