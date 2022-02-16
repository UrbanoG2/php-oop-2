<?php 

require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/Product.php";

$user = new User ("Giuseppe", "Urbano", new Card(851, "03/35", "2366594
61168496" ));

var_dump($user);