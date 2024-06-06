<?php

// Définition de la classe de base Employee
class Employee {
    private string $name;
    private float $salary;

    public function __construct(string $name, float $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getSalary(): float {
        return $this->salary;
    }

    public function setSalary(float $salary): void {
        $this->salary = $salary;
    }

    // Méthode pour calculer le salaire (redéfinie dans les classes dérivées)
    public function calculateSalary(): float {
        // Par défaut, le salaire est celui donné lors de l'initialisation
        return $this->salary;
    }
}

// Classe dérivée FullTimeEmployee
class FullTimeEmployee extends Employee {
    private int $hoursPerWeek;
    private float $hourlyRate;

    public function __construct(string $name, float $salary, int $hoursPerWeek, float $hourlyRate) {
        parent::__construct($name, $salary);
        $this->hoursPerWeek = $hoursPerWeek;
        $this->hourlyRate = $hourlyRate;
    }

    // Méthode pour calculer le salaire pour les employés à temps plein
    public function calculateSalary(): float {
        return $this->hoursPerWeek * $this->hourlyRate;
    }
}

// Classe dérivée PartTimeEmployee
class PartTimeEmployee extends Employee {
    private int $hoursPerMonth;
    private float $hourlyRate;

    public function __construct(string $name, float $salary, int $hoursPerMonth, float $hourlyRate) {
        parent::__construct($name, $salary);
        $this->hoursPerMonth = $hoursPerMonth;
        $this->hourlyRate = $hourlyRate;
    }

    // Méthode pour calculer le salaire pour les employés à temps partiel
    public function calculateSalary(): float {
        return $this->hoursPerMonth * $this->hourlyRate;
    }
}

// Classe dérivée Consultant
class Consultant extends Employee {
    private int $daysWorked;
    private float $dailyRate;

    public function __construct(string $name, float $salary, int $daysWorked, float $dailyRate) {
        parent::__construct($name, $salary);
        $this->daysWorked = $daysWorked;
        $this->dailyRate = $dailyRate;
    }

    // Méthode pour calculer le salaire pour les consultants
    public function calculateSalary(): float {
        return $this->daysWorked * $this->dailyRate;
    }
}

// Classe Team
class Team {
    private array $members = [];

    public function addEmployee(Employee $employee): void {
        $this->members[] = $employee;
    }

    // Méthode pour calculer la masse salariale totale de l'équipe
    public function calculateTotalSalary(): float {
        $totalSalary = 0;
        foreach ($this->members as $member) {
            $totalSalary += $member->calculateSalary();
        }
        return $totalSalary;
    }
}

// Test de l'implémentation
$employee1 = new FullTimeEmployee("John Doe", 40.0, 40, 20.0);
$employee2 = new PartTimeEmployee("Jane Smith", 0.0, 80, 15.0);
$employee3 = new Consultant("Bob Johnson", 0.0, 20, 300.0);

$team = new Team();
$team->addEmployee($employee1);
$team->addEmployee($employee2);
$team->addEmployee($employee3);

$totalSalary = $team->calculateTotalSalary();
echo "Masse salariale totale de l'équipe : $" . $totalSalary . "\n";
?>
