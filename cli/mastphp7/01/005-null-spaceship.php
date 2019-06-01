<?php

$ar1 = [
  'hey' => 'there'
];

echo "simplified assignment from object key/property:\n";

//so we used to need to check if a key is present and not empty when assigning
// an array key value . it's messy:
$var1 = (isset($ar1['bla']) && !empty($ar1['bla'])) ? $ar1['bla'] : 'somedefault';
echo "\$var1: {$var1}\n";

// php has a new operator, the null coalesce, double questionmark, '??'
// that does just that , but cleaner
$var2 = $ar1['bla'] ?? 'somedefault';
echo "\$var2: {$var2}\n";

// using the spaceship operator as a convenience
$users = ['branko', 'iva', 'luka', 'ida'];
echo "users list:\n";
echo implode($users, ", ") . "\n";

usort($users, function($a, $b){
  // same as ($a < $b) ? -1 : (($a > $b) ? 1 : 0)
  //  but cleaner
  return $a <=> $b;
});

echo "users list, sorted:\n";
echo implode($users, ", ") . "\n";


 ?>
