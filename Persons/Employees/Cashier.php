<?php
namespace Persons\Employees;

class Cashier extends Employee {
    
    public function __construct(string $name, string $age, string $address, int $employeeId, float $salary) {
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }
    public function receiveOrder() {
        echo $this->name . " received the order\n";
    }

    public function takeOrder() {
        echo $this->name . " made the invoice\n";
    }
}