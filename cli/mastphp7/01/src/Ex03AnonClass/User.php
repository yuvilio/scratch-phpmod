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

    // we're returning an object instance of a class (that we'll never need to use again)
    // setting up this class instance allows us to use a nifty trick, chaining
    // the payoff is an object we can call this way: $user->salary()->pay();
    // notice we're passing IBAN and salary in as parameters since this class is
    // completely cut off from the Salary class. has it's own properties
    return new class($this->IBAN, $this->salary) implements Salary {

      //we creating a class that's just like User, but we're mixing into it
      // an interface Salary ( for pay()) which happens use a trait (Util ).
      //
      use Util;

      // partially mirror the parts of the User class we need. since this is a class
      // we're doing it in oop style (properties)
      // make use of passed in User data  but in a completely separate way
      private $_IBAN;
      protected $_salary;
      public function __construct($IBAN, $salary){

          //we were called from a user class, so we were passed $IBAN and $salary.
          // we'll need them, so store them in this object's properties
          //initialize values:
          $this->_IBAN = $IBAN;
          $this->_salary = $salary;
      }


      // something different in this class from User
      // it fullfills interface Salary's pay() method (which we call)
      public function pay(){
        // use mixed in trait Util's format() method
        echo $this->_IBAN . ' ' . $this->format($this->_salary);
      }

    };

  }

}
