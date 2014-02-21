<?php 
/*Carles Puerto / Javi Olmedo
 * Projecte PHP M7 UF1
 * */
class Vol {
	
	private $idVol = null;
	private $aparell = null;
	private $dataVol = null;
	private $duradaVol = null;
	private $pilot = null;
	private $actiu = null;
	

	public function __construct($vol_idvol, $vol_aparell, $vol_datavol, $vol_duradavol, $vol_pilot) {	
		$this->setIdVol($vol_idvol);
		$this->setAparell($vol_aparell);
		$this->setDataVol($vol_datavol);	
		$this->setDuradaVol($vol_duradavol);
		$this->setPilot($vol_pilot);	
		$this->setActiu(true);	
	}	
		
	public function getIdVol(){		
		return $this->idVol;
	}

	public function setIdVol($value){	
		$this->idVol = $value;		
	}

	public function getAparell(){
		return $this->aparell;
	}

	public function setAparell($value){
		$this->aparell = $value;
	}

	public function getDataVol(){
		return $this->dataVol;
	}

	public function setDataVol($value){
		$this->dataVol = $value;
	}
	
	
	public function getDuradaVol(){
		return $this->duradaVol;
	}

	public function setDuradaVol($value){
		$this->duradaVol = $value;
	}
		
	public function getPilot(){
		return $this->pilot;
	}

	public function setPilot($value){
		$this->pilot = $value;
	}
	public function getActiu(){		
		return $this->actiu;
	}

	public function setActiu($actiu){	
		$this->actiu = $actiu;		
	}
	
	public function mostraAtributs(){		
			$atributs[0]=$this->getIdVol();
			$atributs[1]=$this->getAparell();	
			$atributs[2]=$this->getDataVol();
			$atributs[3]=$this->getDuradaVol();
			$atributs[4]=$this->getPilot();	
		return $atributs;
	}
	
	public function esborraVol(){
		$this->setActiu(false);
	}
		
} 
?>
