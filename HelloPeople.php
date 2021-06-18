<?php

require_once __DIR__ . '/vendor/autoload.php';

use ProgrammerZamanNow\Data\People;

$people = new People("Ikhsan");
echo $people->sayHello("Kuncuro") . PHP_EOL;