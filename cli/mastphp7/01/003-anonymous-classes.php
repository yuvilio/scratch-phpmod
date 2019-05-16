<?php

require_once 'vendor/autoload.php';

use Ch01\Ex03AnonClass\User as User;


// sometimes we don't need classes for more than one use. yeah, like a whole
// class (not just an object instance), but used one time
// in those cases, there's no need

// an anonymous class, php 7 notation:
$obj = new class(){};
echo get_class($obj) . "\n"; // class@anonymousphp shell code0x7f23af27c52b

// let's see it in action
$user = new User('GB1234', 4500.00); //lets create a user

// and get that user's salary. Now. that salary is available via an Interface and a trait. so we'll careate  
$user->salary()->pay();
