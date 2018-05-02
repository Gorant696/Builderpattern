<?php 
require "vendor/autoload.php";

use Test\Director;
use Test\UserBuilder;
use Test\AddressBuilder;

 
$director = new Director();
$user = new UserBuilder('Goran', 'Tolusic');
$address = new AddressBuilder('nazorova 93', 'djakovo');


$director->build($user);

$director->build($address);