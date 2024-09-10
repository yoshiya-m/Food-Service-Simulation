<?php

namespace Persons;

class Customer extends Person{
    public function __construct($name, $age, $address){
        parent::__construct($name, $age, $address);
    }
}

$customer = new Customer("josh", 24, "ohio");
echo $customer->name;
