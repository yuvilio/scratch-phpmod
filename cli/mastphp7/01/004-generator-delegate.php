<?php
declare(strict_types=1);

require_once 'vendor/autoload.php';

// using a function seems to require instantiating a class?
use Ch01\Ex04GeneratorDel\GenFunctions as GenFunctions;
use function Ch01\Ex04GeneratorDel\even as even;
use function Ch01\Ex04GeneratorDel\mix as mix;
use function Ch01\Ex04GeneratorDel\odd as odd;

$trivial = new GenFunctions();


//test out generators
echo "some even numbers\n";
foreach (even(0, 10) as $num ){
  echo $num . ", ";
}
echo "\n";


echo "some odd numbers\n";
foreach (odd(0, 10) as $num ){
  echo $num . ", ";
}
echo "\n";

// items generated from the more complicated mix generator:
echo "some numbers from mix()\n";
foreach (mix() as $num ){
  echo $num . ", ";
}
echo "\n";
