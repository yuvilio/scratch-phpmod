<?php
declare(strict_types=1);

require_once 'vendor/autoload.php';


use Ch01\Ex07Iterable\{
  CaldourCastle,
  function castleObjects
};

$cadour_castle = new CaldourCastle();

// we need to iterate over the castle's objects. we don't care wher they are
// looking at the class, some are from a constant, others from a class , ..
// so we grouped all the objects together in a generator called castleObjects, and
// told PHP it was iterable

$castleTour = function(iterable $castle_objects = []){
  echo "welcome to caldour castle! here are some objects we'll see:\n";
  foreach ($castle_objects as $castle_object){
    echo "{$castle_object}, ";
  }
  echo "\n";
};

$castleTour(castleObjects());
