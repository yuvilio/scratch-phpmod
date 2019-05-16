<?php

namespace Ch01\Ex03AnonClass;


class User {
  // users have an id and a salary
  private $IBAN;
  protected $salary;

  public function __construct($IBAN, $salary){
      //initialize values:
      $this->IBAN = $IBAN;
      $this->salary = $salary;
  }


  // and now for a little inception
  //
  function salary(){

    // setting up this class instance allows us to use a nifty trick, chaining
    // the payoff is an object we can call this way: $user->salary()->pay();

    return new class($this->IBAN, $this->salary) implements Salary {

      //we creating a class that's just like Salary, but we're mixing into it
      // an interface (pay()) which happens use a trait (Util ).
      //
      use Util;
      private $_IBAN;
      protected $_salary;

      public function __construct($IBAN, $salary){

          //we were called from a user class, so we were passed $IBAN and $salary.
          // we'll need them, so store them in this object's properties 
          //initialize values:
          $this->_IBAN = $IBAN;
          $this->_salary = $salary;
      }


      // fulfill interface Salary's pay() method
      public function pay(){
        // use mixed in trait Util's format() method
        echo $this->_IBAN . ' ' . $this->format($this->_salary);
      }

    };

  }

}
