<?php

namespace Ch02\Ex02GetSet;

class Chores {

    private $assignee = [
      'name' => '',
      'role' => ''
    ];

    // overload/intercept '=' property assignment ($obj->$prop = $value)
    public function __set($prop, $value)
    {
      $this->assignee[$prop] = $value;
    }

    // similar getter . $obj->prop
    public function __get($prop)
    {
      return $this->assignee[$prop];
    }

    // when printing the object (e.g.: echo $obj), a string representation we want to show
    public function __toString()
    {
       return "Steward " . $this->assignee['name'] . " currently available. Role: {$this->assignee['role']}\n";
    }

  }
