<?php

require_once 'vendor/autoload.php';

use Ch02\Ex02GetSet\{
  Chores
};

$chores = new Chores();

$chores->name = 'Gwydion';
$chores->role = 'Sweeper';

echo $chores;
echo "The kitchen needs a {$chores->role}, see to it at once {$chores->name}\n";
