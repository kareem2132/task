<?php
abstract class Employee {
    abstract public function calculateSalary();
}

class HourlyEmployee extends Employee {
    private $hoursWorked = 40;
    private $hourlyRate = 15;

    public function calculateSalary() {
        return $this->hoursWorked * $this->hourlyRate;
    }
}
$employee = new HourlyEmployee();
echo $employee->calculateSalary(); 
?>