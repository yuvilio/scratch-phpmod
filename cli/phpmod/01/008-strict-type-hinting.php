<?php
// enforce type hinting at compile time (compains )
declare(strict_types=1);

$register = function(string $email, int $age, bool $notify){
  // ...
  echo "registering email ${email}\n";
};

// this call will run fine since we're honoring with the type hiting of the arguments
$register('bla@blee.com', 12, false);

// when uncommented the line below:  will complain
// from phan: [lint:php] cli/phpmod/01/008-strict-type-hinting.php:14 PhanTypeMismatchArgument Argument 1 (email) is 23 but Closure(string $email, int $age, bool $notify) takes string defined at cli/phpmod/01/008-strict-type-hinting.php:5
// PHP Fatal error:  Uncaught TypeError: Argument 1 passed to {closure}() must be of the type string, integer given,

// $register(23, 12, false);
