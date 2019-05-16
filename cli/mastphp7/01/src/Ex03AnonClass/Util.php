<?php

namespace Ch01\Ex03AnonClass;

//here's a simple trait you can mixin to classes etc
// it provides a utility method to format a float to a
trait Util {
  public function format(float $number){
    return number_format($number, 2); // format the number having two
      //significant figures after the decimal, e.g: 4.53
  }
}
