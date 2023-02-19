<?php 
declare(strict_types=1);

class Person
{
    public $age = 0;
    public $name = '';
}

$person = new Person();
$person->age = 10;
$person->name = 12;
var_dump($person);