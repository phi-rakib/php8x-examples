<?php

class Customer
{
    public function __construct(
        public string $name,
        public string $email,
        public string $age
    )
    {
        
    }
}

$customer = new Customer(email:'test@example.com', name:'Smith', age:21);
var_dump($customer);