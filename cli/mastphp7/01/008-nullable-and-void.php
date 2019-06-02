<?php
require_once 'vendor/autoload.php';

use Ch01\Ex08NullableVoid\{
  BehrsHouse,
  function welcome
};


$behrshouse = new BehrsHouse();

//passing a null fvalue
welcome(null, "possum");
welcome('human', "alexander");
