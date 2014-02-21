<?php 
include_once '../model/DAO/class_pilotdb.php';
/*Carles Puerto / Javi Olmedao
 * Projecte PHP M7 UF1
 * */

class Pilot {
	
	private $nifPilot = null;
	private $nom = null;
	private $cognoms = null;
	private $telefon = null;
	private $adreca = null;
	private $numAterratges = null;
	private $numHoresVol = null;
	private $actiu = null; 

	public function __construct($pilot_nifpilot, $pilot_nom, $pilot_cognoms, $pilot_telefon, $pilot_adreca, $pilot_numaterratges, $pilot_numhoresvol,$pilot_actiu) {	
		$this->setNifPilot($pilot_nifpilot);
		$this->setNom($pilot_nom);
		$this->setCognoms($pilot_cognoms);	
		$this->setTelefon($pilot_telefon);
		$this->setAdreca($pilot_adreca);
		$this->setNumAterratges($pilot_numaterratges);
		$this->setNumHoresVol($pilot_numhoresvol);	
		$this->setActiu($pilot_actiu);
		
	}	
	
	
	public function getNifPilot(){
		return $this->nifPilot;
	}

	public function setNifPilot($nifPilot){
		$this->nifPilot = $nifPilot;
	}

	public function getNom(){
		return $this->nom;
	}

	public function setNom($nom){
		$this->nom = $nom;
	}

	public function getCognoms(){
		return $this->cognoms;
	}

	public function setCognoms($cognoms){
		$this->cognoms = $cognoms;
	}

	public function getTelefon(){
		return $this->telefon;
	}

	public function setTelefon($telefon){
		$this->telefon = $telefon;
	}

	public function getAdreca(){
		return $this->adreca;
	}

	public function setAdreca($adreca){
		$this->adreca = $adreca;
	}

	public function getNumAterratges(){
		return $this->numAterratges;
	}

	public function setNumAterratges($numAterratges){
		$this->numAterratges = $numAterratges;
	}

	public function getNumHoresVol(){
		return $this->numHoresVol;
	}

	public function setNumHoresVol($numHoresVol){
		$this->numHoresVol = $numHoresVol;
	}
	
	public function getActiu(){
		return $this->actiu;
	}

	public function setActiu($actiu){
		$this->actiu = $actiu;
	}
	
	public function mostraAtributsPi(){		
			$atributs[0]=$this->getNifPilot();
			$atributs[1]=$this->getNom();	
			$atributs[2]=$this->getCognoms();
			$atributs[3]=$this->getTelefon();
			$atributs[4]=$this->getAdreca();
			$atributs[5]=$this->getNumAterratges();
			$atributs[6]=$this->getNumHoresVol();	
		return $atributs;
	}
	
	public function esborraPilot(){
		$this->setActiu(false);
	}	
	
	public function activaPilot(){
		$this->setActiu(true);
	}		
			
} 
?>
