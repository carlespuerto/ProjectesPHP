<?php 
/*Carles Puerto / Javi Olmedo
 * Projecte PHP M7 UF1
 * */

class AparelldeVol {
	
	private $idAparell = null;
	private $longitud = null;
	private $pes = null;
	private $consumXhora = null;
	private $actiu = null;

	public function __construct($aparell_idaparell, $aparell_longitud, $aparell_pes, $aparell_consumxhora) {	
		$this->setIdAparell($aparell_idaparell);
		$this->setLongitud($aparell_longitud);
		$this->setPes($aparell_pes);
		$this->setConsumXhora($aparell_consumxhora);
		$this->setActiu(true);				
	}	
		
		public function getIdAparell(){
		return $this->idAparell;
	}

	public function setIdAparell($idAparell){
		$this->idAparell = $idAparell;
	}

	public function getLongitud(){
		return $this->longitud;
	}

	public function setLongitud($longitud){
		$this->longitud = $longitud;
	}

	public function getPes(){
		return $this->pes;
	}

	public function setPes($pes){
		$this->pes = $pes;
	}

	public function getConsumXhora(){
		return $this->consumXhora;
	}

	public function setConsumXhora($consumXhora){
		$this->consumXhora = $consumXhora;
	}
	
	public function getActiu(){
		return $this->actiu;
	}

	public function setActiu($actiu){
		$this->actiu = $actiu;
	}
	
	public function esborraAparell(){
		$this->setActiu(false);
	}	
	
	public function mostraAtributsAp(){		
			$atributs[0]=$this->getIdAparell();
			$atributs[1]=$this->getLongitud();	
			$atributs[2]=$this->getPes();
			$atributs[3]=$this->getConsumXhora();
		return $atributs;
	}
	
	
} 
?>
