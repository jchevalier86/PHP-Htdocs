<?php
    enum sexe : string {
        case Homme = "H";
        case Femme = "F";
    }   
    
    class Humain {
        private string $prenom;
        private string $nom;
        private sexe $sexe;
        private int $age = 1;
        private string $skills;

        public function __construct(string $prenom, string $nom, string $skills) {
            $this->prenom = $prenom;
            $this->nom = $nom;
            $this->sexe = sexe::from("H");
            $this->skills = $skills;
        }

        public function getPrenom() : string {
            return $this->prenom;
        }

        public function getNom() : string {
            return $this->nom;
        }

        public function getSexe() : string {
            return $this->sexe->value;
        }

        public function getAge() : int {
            return $this->age;
        }

        public function getSkills() : string {
            return $this->skills;
        }

        public function setPrenom(string $prenom) : void {
            $this->prenom = $prenom;
        }

        public function setNom(string $nom) : void {
            $this->nom = $nom;
        }

        public function setSexe(string $sexe) : void {
            $this->sexe = $sexe;
        }

        public function setAge(int $age) : void {
            $this->age = $age;
        }

        public function setSkills(string $skills) : void {
            $this->skills = $skills;
        }

        public function anniv() {
            $this->age++;
        }

        public function printHumain() : void {
            echo $this->prenom . " " . $this->nom . " " . $this->sexe . " " . $this->age . " " . $this->skills . " ";
        }
    }

    $humain1 = new Humain("Toto", "Tutu", "Front end");
    $humain1->getPrenom("Toto");
    $humain1->getNom("Tutu");
    $humain1->getSkills("Front end");
    $humain2 = $humain1;
    $humain3 = clone $humain1;
    
    echo "Nouvel humain :" . "<br>";
    echo "Prenom : " . $humain1->getPrenom() . "<br>";
    echo "Nom : " . $humain1->getNom() . "<br>";
    echo "Sexe : " . $humain1->getSexe() . "<br>";
    echo "Age : " . $humain1->getAge() . "<br>";
    echo "Connaissances : " . $humain1->getSkills() . "<br>";
    
    $humain1->anniv();
    echo "C'est l'anniversaire de " . $humain1->getPrenom() ." il a maintenant : " . $humain1->getAge() . " ans";
    $humain2->printHumain();
?>
