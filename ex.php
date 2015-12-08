<?php

use Acme\Users\Person;
use Acme\Staff;
use Acme\Business;

$lucas = new Person('Lucas McDaniel');

$staff = new Staff([$lucas]);

$bernie = new Business($staff);

$bernie->hire(new Person('Logan Dougher'));

var_dump($bernie->getStaffMembers());