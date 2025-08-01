<?php
class Employee {
    public $name;
    protected $salary;
    private $bonus;
    public function __construct($name, $salary, $bonus) {
        $this->name = $name;
        $this->salary = $salary;
        $this->bonus = $bonus;
    }
    public function showInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Salary: " . $this->salary . "<br>";
        echo "Bonus: " . $this->bonus . "<br>";
    }
}
$emp1 = new Employee("Karim", 5000, 1000);
$emp1->showInfo();
?>
