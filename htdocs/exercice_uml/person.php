<?php

class Person {
    // Attributes
    private string $firstName;
    private string $lastName;
    private int $age;

    // Methods
    public function printAttributes() : void {
        echo $this->firstName . " " . $this->lastName . " " . $this->age . " years old\n";
    }

    public function setFirstName(string $firstName) : void {
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName) : void {
        $this->lastName = $lastName;
    }

    public function setAge(int $age) : void {
        $this->age = $age;
    }

    public function getFirstName() : string {
        return $this->firstName;
    }

    public function getLastName() : string {
        return $this->lastName;
    }

    public function getAge() : int {
        return $this->age;
    }

    // Constructors
    public function __construct($firstName = "", $lastName = "", $age = 0) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }
}

// Usage
$person1 = new Person();
$person1->setFirstName("John");
$person1->setLastName("Doe");
$person1->setAge(30);
$person1->printAttributes();

$person2 = new Person("Jane", "Doe", 25);
$person2->printAttributes();

$age = $person2->getAge();
echo $age;
?>
