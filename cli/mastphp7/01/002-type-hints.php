<?php

require_once 'vendor/autoload.php';

// using a function seems to require instantiating a class? 
use Ch01\Ex01TypeHints\DaventryDiner as DaventryDiner;
use function Ch01\Ex01TypeHints\takeOrder;

$b = new DaventryDiner();
echo takeOrder("alex");
