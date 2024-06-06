<?php
    class Article {
        protected string $nom;
        protected string $id;
        protected float $prix;
        protected int $quantité;

        public function getNom() : string {
            return $this->nom;
        }

        public function setNom(string $nom) : void {
            $this->nom = $nom;
        }

        public function getId() : string {
            return $this->id;
        }

        public function setId(string $id) : void {
            $this->id = $id;
        }

        public function getPrix() : float {
            return $this->prix;
        }

        public function setPrix(float $prix) : void {
            $this->prix = $prix;
        }

        public function getQuantité() : int {
            return $this->quantité;
        }

        public function setQuantité(int $quantité) : void {
            $this->quantité = $quantité;
        }

        public function __construct(string $nom, string $id, float $prix, int $quantité) {
            $this->nom = $nom;
            $this->id = $id;
            $this->prix = $prix;
            $this->quantité = $quantité;
        }

        public function printArticle() : void {
            echo $this->nom . " " . $this->id . " " . $this->prix . " " . $this->quantité . " ";
        }
    }

    class Bricolage extends Article {
        private string $rayon;
        private bool $appelec;
        
        public function getRayon() : string {
            return $this->rayon;
        }

        public function setRayon(string $rayon) : void {
            $this->rayon = $rayon;
        }

        public function getAppelec() : bool {
            return $this->appelec;
        }

        public function setAppelec(bool $appelec) : void {
            $this->appelec = $appelec;
        }

        public function __construct(string $nom, string $id, float $prix, int $quantité, string $rayon, bool $appelec) {
            $this->nom = $nom;
            $this->id = $id;
            $this->prix = $prix;
            $this->quantité = $quantité;
            $this->rayon = $rayon;
            $this->appelec = $appelec;
        }

        public function printArticle() : void {
            echo $this->nom . " " . $this->id . " " . $this->prix . " " . $this->quantité . " " . $this->rayon . " " . $this->appelec . " ";
        }
    }

    class Jardinage extends Article {
        private string $saison;

        public function getSaison() : string {
            return $this->saison;
        }

        public function setSaison(string $saison) : void {
            $this->saison = $saison;
        }

        public function __construct(string $nom, string $id, float $prix, int $quantité, string $saison) {
            $this->nom = $nom;
            $this->id = $id;
            $this->prix = $prix;
            $this->quantité = $quantité;
            $this->saison = $saison;
        }

        public function printArticle() : void {
            echo $this->nom . " " . $this->id . " " . $this->prix . " " . $this->quantité . " " . $this->saison . " ";
        }
    }

    class AlimentPourAnimaux extends Article {
        private string $animaux;
        private float $poid;

        public function getAnimaux() : string {
            return $this->animaux;
        }

        public function setAnimaux(string $animaux) : void {
            $this->animaux = $animaux;
        }

        public function getPoid() : float {
            return $this->poid;
        }

        public function setPoid(float $poid) : void {
            $this->poid = $poid;
        }

        public function __construct(string $nom, string $id, float $prix, int $quantité, string $animaux, float $poid) {
            $this->nom = $nom;
            $this->id = $id;
            $this->prix = $prix;
            $this->quantité = $quantité;
            $this->animaux = $animaux;
            $this->poid = $poid;
        }

        public function printArticle() : void {
            echo $this->nom . " " . $this->id . " " . $this->prix . " " . $this->quantité . " " . $this->animaux . " " . $this->poid . " ";
        }
    }

    class Magasin {
        protected array $article;
        
        public function getArticle() : array {
            return $this->article;
        }
        
        public function addArticle(Article $article) : void {
            array_push($this->articles = $article);
        }
        public function __construct() {
            $this->article = [];
        }

        public function printArticle() : void {
            foreach ($this->articles as $article) {
                $article->printArticle();
            }
        }
    }

    $rateau1 = new Article ("Rateau", "Rat456", 25, 5, "Ete");
    $clou1 = new Article ("Clou", "Clou12", 5, 30, "Quincaillerie", "Nonelectrique");
    $aliment1 = new Article ("Croquette", "Croq350", 8, 10, "Chien", "3kg");

    $rateau1->printArticle();
    $clou1->printArticle();
    $aliment1->printArticle();
?>

