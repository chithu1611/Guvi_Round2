<?php

require_once __DIR__ . './../assets/predis-2.x/autoload.php';

Predis\Autoloader :: register();

$redis = new Predis\Client();

# selecting particular DATABASE on redis

$redis->select(1);

# selected database 1

?>