<?php
    class Person
    {
        private string $firstName;
        private string $lastName;
        private int $age;

        public function printAttributes() : void {
            echo $this->firstName . " " . $this->lastName . " " . $this->age . " years old\n";
        }
        
        public function setFirstName(string $firstName) : void {
            $this->firstName = $firstName;
        }

        public function setlastName(string $lastName) : void {
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

        public __construct($firstName = "", $lastName = "", $age =0) {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->age = $age;
        }
    }

    $person1 = new Person();
    $person1 = setFirstName();
    $person1 = setlastName();
    $person1 = setAge();
?>

<?php
    class Entreprise 
    {
        private string $lastName;
        private float $chiffreAffaires;
        private class->Person $employes;

        public function printAttributes() : void {
            echo $this->lastName ." ". $this->chiffreAffaires . " " . $employes . " " ;
        }
        public function setLastName() : void {
            $this->lastName = $lastName;
        }
        public function setChiffreAffaires() : void {
            $this->chiffreAffaires = $chiffreAffaires;
        }
        public function setEmployes() : void {
            $this->employes = $employes;
        }
        public function setAfficherEmployes() : void {
            $this->afficherEmployes = $afficherEmployes;
        }
        public function setAjouterEmployes() : void {
            $this->ajouterEmployes = $ajouterEmployes;
        }
        public function getLastName() : string {
            return $this->lastName;
        }
        public function getChiffreAffaires() : float {
            return $this->chiffreAffaires;
        }
        public function getEmployes() : string {
            return $this->employes;
        }
        public function __construct($lastName="", $chiffreAffaires=0, $employes="") {
            $this->lastName = $lastName;
            $this->chiffreAffaires = $chiffreAffaires;
            $this->employes = $employes;
        }
    }

    $person1 = new Person();
    $person1 = setlastName();
    $person1 = setChiffreAffaires();
    $person1 = setEmployes();
?>

<?php
    class Voiture
    {

    }
?>