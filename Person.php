<?php

abstract class Person{
    private string $address;
    private string $name;
    private int $age;

    public function __construct(string $address, string $name, int $age){
        $this->address = $address;
        $this->name = $name;
        $this->age = $age;     
    }
}

class Employee extends Person{
    private int $employeeId;
    private double $salary;

    public function __construct(string $address, string $name, int $age){
        parent::__construct($address, $name, $age);
    }
}

class Customer extends Person{
    public function __construct(string $address, string $name, int $age){
        parent::__construct($address, $name, $age);
    }
}

class Cashier extends Employee{
    public function __construct(string $address, string $name, int $age){
        parent::__construct($address, $name, $age);
    }

    public function generateOrder(array $categories, Restaurant $restaurant) : FoodOrder{

    }

    public function generateInvoice(FoodOrder $order) : Invoice {

    }
}

class Restaurant extends Employee{
    private FoodItem $menu;
    private Employee $employees;

    public function order(array $categories) : Invoice{ 

    }
}

$employee = new Employee("miami", "josh", 26);
echo $employee->name . "\n";