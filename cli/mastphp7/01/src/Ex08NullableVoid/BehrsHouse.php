<?php
namespace Ch01\Ex08NullableVoid;

class BehrsHouse {}

//php 7.1 lets you allow null values when specifying a type hint (add "?" before hint)
// so that it doesn't
// error and and the other arguments after it are collected
// also notice this function doesn't return anything, so let's spell out
// a void return type
function welcome(?string $guestType, $name) : void {
  if ($guestType == 'human'){
    echo "keep out of our house!\n";
  } else {
    echo "welcome {$name}!\n";
  }
}
