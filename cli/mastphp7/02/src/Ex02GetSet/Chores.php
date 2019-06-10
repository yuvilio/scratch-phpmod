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

  }
