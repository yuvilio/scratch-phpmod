<?php
declare(strict_types=1);

require_once 'vendor/autoload.php';


// you can import a whole bunch of classes, ... from a namespace without having
// to write out the whole namespace for each one. and you get them imported
// as if they're local to this file (no need to use their namespace)
// group use syntax
use Ch01\Ex06GroupUse\{
  Kings2Map,
  MerPeople,
  Sharkies,
  Kolyma
};

$kings2map = new Kings2Map();

$merPeople = new MerPeople();
$merPeople->inform();

$kolyma = new Kolyma();
$kolyma->inform();

$sharkies = new Sharkies();
$sharkies->inform();


 ?>
