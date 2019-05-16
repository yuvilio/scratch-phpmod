<?php
// DaventryDiner.php

namespace Ch01\Ex01TypeHints;

//seems to be a minimum trivia class (matching the filename for the namespace to exist, even if not used
class DaventryDiner { }



//we're also exporting this function. its got a type hint indicating that it returns a string value
function takeOrder($name) : string {
  return "Coming right up sir, " . $name;
}

// here's another one that returns a number

function getOrderNumber($name) : int {
  return time();
}
