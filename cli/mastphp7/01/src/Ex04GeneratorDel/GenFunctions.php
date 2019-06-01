<?php
// DaventryDiner.php

namespace Ch01\Ex04GeneratorDel;

// trivial class (matches filename)
class GenFunctions { }


//what are generators?
// they are handy ways to get data when there is some way (algorithm, etc, )
// to generate/get that data. that way you don't need to take up a lot of space

function even($start, $limit) {
  for ($i = $start; $i <= $limit; $i++){
    if ($i % 2 == 0){ // is even
      yield $i;
    }
  }
}

function odd($start, $limit) {
  for ($i = $start; $i <= $limit; $i++){
    if ($i % 2 != 0){ // is odd
      yield $i;
    }
  }
}

// a less simple pattern
// this is the list, notice some numbers are hardcoded (first is -1, last is 33
// and some parts of the list are dynamic (and even use other generators)
function mix(){
  yield -1; //first item
  yield from odd(0, 5); //all the numbers in the range, generated via the odd() generator
  yield 17; // then 17
  yield from even(0, 5);
  yield 33;
}
