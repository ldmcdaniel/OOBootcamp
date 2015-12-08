<?php

class BankAccount {
    //This will allow the tax rate to be changed outside
    //of the class.
    public static $tax = .09;
    //A better way (constants are always capitalized):
    const TAX = .09;
}

echo 'BankAccount ', BankAccount::TAX, PHP_EOL;

class Person {
    public $age = 1;

    public function haveBirthday()
    {
        $this->age += 1;
    }

    public function age()
    {
        return $this->age;
    }
}

$joe = new Person;
$joe->haveBirthday();
$joe->haveBirthday();

echo ' joe ', $joe->age(), PHP_EOL;

$jane = new Person;
$jane->haveBirthday();

echo ' jane ', $jane->age(), PHP_EOL;

// '::' is the Scope Resolution Operator
//echo Person::$age;

class Math {
    //When you think 'static', think 'share;
    public static function add()
    {
        return array_sum(func_get_args());
    }
}

//$math = new Math;
//
//var_dump($math->add(1, 2, 3, 4, 5, 6, 7));

//This code is replaced with

echo ' math ', Math::add(1, 2, 3), PHP_EOL;