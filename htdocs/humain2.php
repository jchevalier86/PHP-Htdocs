<a href="humain2.php?step=0">Reset</a>
<br><br>

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
        private array $skills;

        public function __construct(string $prenom, string $nom) {
            $this->prenom = $prenom;
            $this->nom = $nom;
            $this->sexe = sexe::from("H");
            $this->skills = ["Pleurer","Se nourrir"];
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

        public function getSkills() : array {
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

        public function apprendre(string $skills) {
            array_push($this->skills, $skills);
        }

        public function printHumain() : void {
            echo $this->prenom . " " . $this->nom . " " . $this->sexe . " " . $this->age . " " . $this->skills . " ";
        }
    }

    $humain1 = new Humain("Toto", "Tutu");
    $humain1->getPrenom("Toto");
    $humain1->getNom("Tutu");
    $humain1->anniv();
    $humain2 = $humain1;
    $humain3 = clone $humain1;

    session_start();
    if(isset($_GET["step"]) && $_GET["step"]=="0") {
        unset($_SESSION["humain"]);
        header("Location: http://localhost/humain2.php");
    }
    if(isset($_SESSION["humain"])) {
            //Mon humain existe.
           $humain1 = $_SESSION["humain"];
           //echo "<pre>".var_export($humain1, true)."</pre>";
            /* AVANT */
            echo "Nouvel humain :" . "<br>";
            echo "Prenom : " . $humain1->getPrenom() . "<br>";
            echo "Nom : " . $humain1->getNom() . "<br>";
            echo "Sexe : " . $humain1->getSexe() . "<br>";
            echo "Age : " . $humain1->getAge() . "<br>";
            echo "Compétences : " . implode(", ",$humain1->getSkills()) . "<br>";

            $humain1->anniv();
            echo "C'est l'anniversaire de " . $humain1->getPrenom() ." il a maintenant : " . $humain1->getAge() . " ans" . "<br>";
            if(array_search("marcher", $humain1->getSkills()) === false){
                //Vérifier son age
                //Si age correct, apprendre à marcher
                echo "Toto apprends à marcher" . "<br>";
                $humain1->apprendre("marcher");
            }

           /* APRES */
           echo "Nouvel humain :" . "<br>";
           echo "Prenom : " . $humain1->getPrenom() . "<br>";
           echo "Nom : " . $humain1->getNom() . "<br>";
           echo "Sexe : " . $humain1->getSexe() . "<br>";
           echo "Age : " . $humain1->getAge() . "<br>";
           echo "Compétences : " . implode(", ",$humain1->getSkills()) . "<br>";

           //echo "<pre>".var_export($humain1, true)."</pre>";
    }
    else {
        $humain1 = new Humain("Toto", "Tutu", "Front end");
        $_SESSION["humain"]=$humain1;
    }
       /* rand(1,2) == 3?$humain1->skills {
        if(rand(1, 2) == 2) {
            //Toto sait marcher
            $this->skills="marcher";
            echo "Toto sait " . $humain1->getSkills() . "<br>";
        }*/
?>