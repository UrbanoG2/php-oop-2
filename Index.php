<?php 

require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/Product.php";


$user = new User ("Giuseppe", "Urbano", new Card(851, "03/35", "2366594
61168496"));

$user->setLevel("gold");

$product = new Product("Svelto", 25, "Detersivo");


// var_dump($user, $product);
var_dump($user->getLevel());