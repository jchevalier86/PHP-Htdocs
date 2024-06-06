<?php
	enum Sexe: string {
		case Homme = "H";
		case Femme = "F";
	}
	class humain {
		public string $prenom;
		public string $nom;
		protected Sexe $sexe;
		private int $age;		
		private array $skills;
		function __construct(string $prenom, string $nom) {
			$this->prenom = $prenom;
			$this->nom = $nom;
			$this->skills = ["Respiration","Nutrition"];
			rand(1,2)==1 ? $this->sexe = Sexe::from("F") : $this->sexe = Sexe::from("H");
			$this->age = 0;
		}
		function getSexe(){
			return $this->sexe->name;
		}
		function getAge(){
			return $this->age;
		}
		function anniversaire(int $nb = 1){
			for($i=1;$i<=$nb;$i++){
				$this->age++;
			}
			return $this->age;
		}
		function apprendre(string $skill){
			if(!array_search($skill,$this->skills)){
				array_push($this->skills,$skill);
			}
		}
		function listeSkills(bool $verbose = true){
			if($verbose){
				return implode(", ",$this->skills);
			}
			else {
				return $this->skills;
			}
		}
		
		function searchSkill(string $skill) {
			if(array_search($skill,$this->skills)!==false){
				//Il sait faire
				return true;
			}
			else {
				return false;
			}
		}
	}
	
	function genEvent($monHumain) {
		if(!$monHumain->searchSkill("Marcher")){
			if($monHumain->getAge() >= rand($monHumain->getAge(),3)){
				$monHumain->apprendre("Marcher");
				echo $monHumain->prenom." a appris à marcher.";
			}
		}
		
		if(rand(1,10)===1){
			echo $monHumain->prenom." s'est cassé une jambe";
			if(rand(1,10)===1){
				echo " et a du être amputé";
			}
			echo ".";
		}
		
		if($monHumain->getAge()>=rand($monHumain->getAge(),123)) {
			echo $monHumain->prenom." est mort paisiblement dans son sommeil.";
			unset($_SESSION["humain"]);
		}
	}
	
	session_start();
	if( isset($_GET["step"]) && $_GET["step"]=="0" ){
		unset($_SESSION["humain"]);
		header("Location: http://localhost/ex/exoclasses.php");
	}
	if(isset($_SESSION["humain"])){
		//Mon humain existe déja.
		$monHumain = $_SESSION["humain"];					//Je fais une copie de mon objet
		echo "<pre>".var_export($monHumain,true)."</pre>";	//avant
		//De grands changements vont se produire ici !!!
		genEvent($monHumain);
		$monHumain->anniversaire();
		echo "<pre>".var_export($monHumain,true)."</pre>";	//après
	}
	else {
		$monHumain=new humain("Thomas","Girardeau");
		echo "<pre>".var_export($monHumain,true)."</pre>";
		$_SESSION["humain"]=$monHumain;						//Je fais une copie de mon objet
	}
?>
<a href="http://localhost/ex/exoclasses.php?step=0">Reset</a>