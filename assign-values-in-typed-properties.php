<?php
declare(strict_types=1);

class Person
{
    public int $age;
    public string $name;
}

$person = new Person();
$person->age = 10;
$person->name = 10;
var_dump($person);