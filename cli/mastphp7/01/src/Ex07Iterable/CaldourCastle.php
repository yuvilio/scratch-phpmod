<?php
namespace Ch01\Ex07Iterable;

class CaldourCastle {}

class GraveYard {
  const mainGraves = ["duke and duchess grave", "possum parents grave"];

  static function getGraves(){
    return self::mainGraves;
  }
}
const jewelry = "tiara";

// sometimes we'll need to iterate over things that are not exactly
// simple arrays. we'll use the 'iterable' pseudotype to turn this generator
// funcction to something that can be iterted (for, ...)
// users of this module want to see all the castle objects. some are in a constant,
// others in a class property. let's make a generator that groups them all
// together and makes them available as simple iterable list
// returned type iterable (like array or other iterable object)
function castleObjects() : iterable {
    yield "bookcase";
    yield jewelry;
    yield implode(GraveYard::getGraves(), ",");
}
