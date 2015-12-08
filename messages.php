<?php

class Person {
  protected $name;

  public function __construct($name)
  {
    $this->name = $name;
  }
}

class Business {
  protected $staff;

  public function __construct(Staff $staff)
  {
    $this->staff = $staff;
  }

  public function hire(Person $person)
  {
    //add $person to the staff collection
    $this->staff->add($person);
  }

  public function getStaffMembers()
  {
    return $this->staff->members();
  }
}

class Staff {
  protected $members = [];

  public function __construct($members = [])
  {
    $this->members = $members;
  }

  public function add(Person $person)
  {
    $this->members[] = $person;
  }

  public function members()
  {
    return $this->members;
  }

}

$lucas = new Person('Lucas McDaniel');

$staff = new Staff([$lucas]);

$bernie = new Business($staff);

$bernie->hire(new Person('Logan Dougher'));

var_dump($bernie->getStaffMembers());