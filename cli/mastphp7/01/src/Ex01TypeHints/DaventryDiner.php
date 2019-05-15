<?php
// DaventryDiner.php

namespace Ch01\Ex01TypeHints;

//seems to be a minimum trivia class (matching the filename for the namespace to exist, even if not used
class DaventryDiner { }

//actual things we're exporting to use
function takeOrder($name){
  return "COming right up sir, " . $name;
}
