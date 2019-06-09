<?php
namespace Ch02\Ex01ObjBasics;

class Kitchen {};

class KitchenSteward
{
  protected $name;
  protected $age;

  public function __construct($name, $age)
  {
      $this->name = $name;
      $this->age = $age;
  }

//some class related functionality isn't specific
  public static function enlist(){
    echo "Wizard kitchen steward finding enlisted wench called\n";
  }

  public function greet(){
    echo "{$this->name}, aged {$this->age}, reporting for service, sir\n";
  }

  public function __destruct(){
    echo "Off I go in favor of the next {$this->name} version\n";
  }
}


class WizardKitchenSteward extends KitchenSteward {

//we inherit name/age from parent class. let's have them initizlized
  // to make use of the parent functionality, we can chain call the parent class constructor
  public function __construct($ws_name, $ws_age){
    parent::__construct($ws_name, $ws_age); //chain call (making $this instance available to parent)
  }

// similarly with any wrap up tasks for an  object
  public function __destruct(){
    parent::__destruct();
  }
}
 ?>
