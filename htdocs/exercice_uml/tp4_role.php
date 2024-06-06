<?php
    class Joueur {
        protected string $nom;
        protected int $pv;

        public function getNom() : string {
            return $this->nom;
        }

        public function getPv() : int {
            return $this->pv;
        }

        public function setNom(string $nom) : void {
            $this->nom = $nom;
        }

        public function setPv(int $pv) : void {
            $this->pv = $pv;
        }

        public function __construct(string $nom, int $pv) {
            $this->nom = $nom;
            $this->pv = $pv;
        }

        public function printJoueur() : void {
            echo $this->nom . " " . $this->pv . " ";
        }
    }

    class Guerrier extends Joueur {
        private int $rage;
        private static int $rageMin=0;
        private static int $rageMax;

        public function getRage() : int {
            return $this->rage;
        }

        public function getRageMax() : int {
            return $this->rageMax;
        }

        public function setRage(int $rage) : void {
            $this->rage = $rage;
        }

        public function setRageMax(int $rageMax) : void {
            $this->rageMax = $rageMax;
        }

        public function sort() : void {
            echo "Coup d'épée";
        }

        public function ultime() : void {
            echo "Coup d'épée puissant";
        }

        public function __construct(string $nom, int $pv, int $rage, int $rageMax) {
            parent::__construct($nom, $pv);
            $this->rage = $rage;
            self : $rageMaxStatic;
        }

        public function printJoueur() : void {
            echo $this->nom . " " . $this->pv . " " . $this->rage . " " . $this->rageMax . " ";
        }
    }

    class Mage extends Joueur {
        private int $mana;
        private static int $manaMin=0;
        private static int $manaMax;

        public function getMana() : int {
            return $this->mana;
        }

        public function getManaMax() : int {
            return $this->manaMax;
        }

        public function setMana(int $mana) : void {
            $this->mana = $mana;
        }

        public function setManaMax(int $manaMax) : void {
            $this->manaMax = $manaMax;
        }

        public function sort() : void {
            echo "Boule de feu";
        }

        public function ultime() : void {
            echo "Plusieurs boule de feu";
        }

        public function __construct(string $nom, int $pv, int $mana, int $manaMax) {
            parent::__construct($nom, $pv);
            $this->mana = $mana;
            self : $manaMaxStatic;
        }

        public function printJoueur() : void {
            echo $this->nom . " " . $this->pv . " " . $this->mana . " " . $this->manaMax . " ";
        }
    }

    class Archer extends Joueur {
        private int $end;
        private static int $endMin=0;
        private static int $endMax;

        public function getEnd() : int {
            return $this->end;
        }

        public function getEndMax() : int {
            return $this->endMax;
        }

        public function setEnd(int $end) : void {
            $this->end = $end;
        }

        public function setEndMax(int $endMax) : void {
            $this->endMax = $endMax;
        }

        public function sort() : void {
            echo "Tir des flèches";
        }

        public function ultime() : void {
            echo "Tirs plusieurs flèches en feu";
        }

        public function __construct(string $nom, int $pv, int $end, int $endMax) {
            parent::__construct($nom, $pv);
            $this->end = $end;
            self : $endMaxStatic;
        }

        public function printJoueur() : void {
            echo $this->nom . " " . $this->pv . " " . $this->end . " " . $this->endMax . " ";
        }
    }

    class Guilde {
        private string $nom;
        private array $joueurs;

        public function getNom() : string {
            return $this->nom;
        }

        public function getJoueurs() : array {
            return $this->joueur;
        }

        public function addJoueur(Joueur $joueur) : void {
            array_push($this->joueurs, $joueur);
        }

        public function taille(int $nbrJoueurs) : void {
            
        }

        public function _construct(string $nom) {
            $this->nom = $nom;
            $this->joueurs = [];
        }

        public function printJoueur() : void {
            echo $this->nom . " ";
            foreach ($this->joueurs as $joueur) {
                $joueur->printJoueur();
            }
        }
    }

    $guerrier1 = new Guerrier ("Aragorn", 100, 100, 400);
    $mage1 = new Mage ("Gandalf", 100, 100, 500);
    $archer1 = new Archer ("Legolas", 100, 100, 300);

    $guilde = new Guilde("Membre");
    $guilde->addJoueur($guerrier1);
    $guilde->addJoueur($mage1);
    $guilde->addJoueur($archer1);

    $guilde->printJoueur();
?>