<?php
    class Person
    {
        private string $nom;
        private string $prenom;
        private int $age;

        public function printAttributes() : void {
            echo $this->nom . " " . $this->prenom . " " . $this->age . " ans\n";
        }
        
        public function setNom(string $nom) : void {
            $this->nom = $nom;
        }

        public function setPrenom(string $prenom) : void {
            $this->prenom = $prenom;
        }

        public function setAge(int $age) : void {
            $this->age = $age;
        }

        public function getNom() : string {
            return $this->nom;
        }
    
        public function getPrenom() : string {
            return $this->prenom;
        }
    
        public function getAge() : int {
            return $this->age;
        }

        public function __construct($nom = "", $prenom = "", $age = 0) {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->age = $age;
        }
    }

    class Entreprise 
    {
        private string $nom;
        private float $chiffreAffaires;
        private array $employes;

        public function printAttributes() : void {
            echo $this->nom ." ". $this->chiffreAffaires . " ";
        }
        public function setNom(string $nom) : void {
            $this->nom = $nom;
        }
        public function setChiffreAffaires(float $chiffreAffaires) : void {
            $this->chiffreAffaires = $chiffreAffaires;
        }
        public function setEmployes(array $employes) : void {
            $this->employes = $employes;
        }
        public function afficherEmployes() : void {
            foreach ($this->employes as $employe) {
                $employe->printAttributes();
            }
        }
        public function ajouterEmploye(Person $employe) : void {
            array_push($this->employes, $employe);
        }
        public function getNom() : string {
            return $this->nom;
        }
        public function getChiffreAffaires() : float {
            return $this->chiffreAffaires;
        }
        public function getEmploye() : array {
            return $this->employes=[];
        }
        public function __construct($nom="", $chiffreAffaires=0, $employes=[]) {
            $this->nom = $nom;
            $this->chiffreAffaires = $chiffreAffaires;
            $this->employes=[];
        }
    }
    $person1 = new Person();
    $person1->setNom("Doe");
    $person1->setPrenom("John");
    $person1->setAge(32);

    $person2 = new Person("Doe", "Jane", 35);

    $entreprise = new Entreprise("Entreprise");
    $entreprise->setChiffreAffaires(340000);
    $entreprise->ajouterEmploye($person1);
    $entreprise->ajouterEmploye($person2);
    
    $entreprise->afficherEmployes();
?>