<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Cloutree\Client;

Cloutree\Client::configure(array("app_key" => "", "app_secret" => ""));

?>