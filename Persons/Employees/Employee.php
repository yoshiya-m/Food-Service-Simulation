<?php

namespace Persons\Employees;

use Persons\Person;

class Employee extends Person {
    private int $employeeId;
    private float $salary;

    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary) {
        parent::__construct($name, $age, $address);
        $this->employeeId = $employeeId;
        $this->salary = $salary;
    }
}