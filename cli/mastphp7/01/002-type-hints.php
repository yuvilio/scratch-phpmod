<?php
declare(strict_types=1);

require_once 'vendor/autoload.php';

// using a function seems to require instantiating a class?
use Ch01\Ex01TypeHints\DaventryDiner as DaventryDiner;
use function Ch01\Ex01TypeHints\takeOrder;
use function Ch01\Ex01TypeHints\getOrderNumber;

$b = new DaventryDiner();

//using functions noting their return type
echo takeOrder("alex") . "\n";
echo getOrderNumber("alex") . "\n";
