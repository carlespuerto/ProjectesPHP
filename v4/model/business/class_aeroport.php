<?php
require_once 'class_pilot.php';
require_once 'class_aparell.php';
require_once 'class_vol.php';

class Aeroport{	
	private $nom = null;
	private $pilots = null;
	private $aparells = null;
	private $vols = null;

public function __construct($nom){
		$this->setNomAeroport($nom);		
		$this->pilots = array();
		$this->aparells = array();
		$this->vols = array();
}

	public function setNomAeroport($nom){
		$this->nom=$nom;
	}
	
	public function agafarPilotsBD($con){
		$PilotDb = new pilotDb();
		return $PilotDb->mostrar($con);
	}
	
	public function carregarPilotsBD($con){
		$totsPilots=$this->AgafarPilotsBD($con);
		$length=count($totsPilots);		
		for ($i=0;$i<$length;$i++){
			array_push($this->pilots, $totsPilots[$i]);
		}
		
	}

	public function inserirPilot($nifPilot,$nom,$cognoms,$telefon,$adreca,$numAterratges,$numHoresVol,$actiu,$con){
		$pl = new Pilot($nifPilot,$nom,$cognoms,$telefon,$adreca,$numAterratges,$numHoresVol,$actiu);
		array_push($this->pilots, $pl);
		$this->inserirPilotBD($pl,$con);
		
	}
	
	public function inserirPilotBD($pilot,$con){
		$pl = new PilotDB();
		$pl->inserir($pilot,$con);
		
	}
	
	
	public function inserirAparell($idAparell,$longitud,$pes,$consumXhora){
		$ap = new AparelldeVol($idAparell,$longitud,$pes,$consumXhora);
		array_push($this->aparells, $ap);		
	}

	
	public function inserirVol($idVol,$idAparell,$dataVol,$duradaVol,$pilot){
		$vl = new Vol($idVol,$idAparell,$dataVol,$duradaVol,$pilot);
		array_push($this->vols, $vl);		
		
	}


//Metodes de Pilot	
	public function getPilots(){
		return $this->pilots;
	}
	
	public function cercaPilot($nifPilot){
		$pos=-1;
		for ($i = 0; $i<count($this->pilots); $i++){
			if (($this->pilots[$i]->getNifPilot()==$nifPilot)&&($this->pilots[$i]->getActiu()==true)){
				$pos=$i;
			}
		}
		return $pos;
	}
	
	public function cercaPilotInactiu($nifPilot){
		$pos=-1;
		for ($i = 0; $i<count($this->pilots); $i++){
			if (($this->pilots[$i]->getNifPilot()==$nifPilot)&&($this->pilots[$i]->getActiu()==false)){
				$pos=$i;
			}
		}
		return $pos;
	}
	
	public function modificaPilot($nifPilot,$nom,$cognoms,$telefon,$adreca,$numAterratges,$numHoresVol,$actiu,$con){
		$pos=$this->cercaPilot($nifPilot);
		if($pos!=-1){
			$this->pilots[$pos]->setNom($nom);
			$this->pilots[$pos]->setCognoms($cognoms);
			$this->pilots[$pos]->setTelefon($telefon);
			$this->pilots[$pos]->setAdreca($adreca);
			$this->pilots[$pos]->setNumAterratges($numAterratges);
			$this->pilots[$pos]->setNumHoresVol($numHoresVol);
			$this->pilots[$pos]->setActiu($actiu);
			$pil = new Pilot($nifPilot,$nom,$cognoms,$telefon,$adreca,$numAterratges,$numHoresVol,$actiu);
			$this->modificarPilotBD($pil,$con);
		}
	}
	
	public function modificarPilotBD($pilot,$con){
		$pilBD = new PilotDb();
		$pilBD->modificar($pilot,$con);
	}
	
	public function esborraPilot($nifPilot,$nom,$cognoms,$telefon,$adreca,$numAterratges,$numHoresVol,$actiu,$con){
		$pos=$this->cercaPilot($nifPilot);
		if($pos!=-1){
			$this->pilots[$pos]->esborraPilot();
			$pil = new Pilot($nifPilot,$nom,$cognoms,$telefon,$adreca,$numAterratges,$numHoresVol,$actiu);
			$this->esborraPilotBD($pil,$con);
		}
	}
	
	public function esborraPilotBD($pilot,$con){
		$pilBD = new PilotDb();
		$pilBD->esborrar($pilot,$con);
	}
	
	public function activaPilot($nifPilot,$nom,$cognoms,$telefon,$adreca,$numAterratges,$numHoresVol,$actiu,$con){
		$pos=$this->cercaPilotInactiu($nifPilot);
		if($pos!=-1){
			$this->pilots[$pos]->activaPilot();
			$pil = new Pilot($nifPilot,$nom,$cognoms,$telefon,$adreca,$numAterratges,$numHoresVol,$actiu);
			$this->activaPilotBD($pil,$con);
		}
	}
	
	public function activaPilotBD($pilot,$con){
		$pilBD = new PilotDb();
		$pilBD->activar($pilot,$con);
	}
	
	public function pilotsActius(){
		$numero=0;
		for($i=0;$i<count($this->pilots);$i++){
			if($this->pilots[$i]->getActiu()==true){		
				$numero++;
			}
		}
		return $numero;
	}
	
//Mètodes d'aparell
	public function getAparells(){
		return $this->aparells;
	}
	
	public function cercaAparell($idAparell){
		$pos=-1;
		for ($i = 0; $i<count($this->aparells); $i++){
			if (($this->aparells[$i]->getIdAparell()==$idAparell)&&($this->aparells[$i]->getActiu()==true)){
				$pos=$i;
			}
		}
		return $pos;
	}
	
	public function modificaAparell($idAparell,$longitud,$pes,$consumXhora){
		$pos=$this->cercaAparell($idAparell);
		if($pos!=-1){
			$this->aparells[$pos]->setLongitud($longitud);
			$this->aparells[$pos]->setPes($pes);
			$this->aparells[$pos]->setConsumXhora($consumXhora);
		}
	}
	
	public function agafaUnAparell($idAparell){
		$pos=$this->cercaAparell($idAparell);
		if($pos!=-1){
			return $this->aparells[$pos];
		}
	}
	
	public function agafaUnPilot($nifPilot){
		$pos=$this->cercaPilot($nifPilot);
		if($pos!=-1){
			return $this->pilots[$pos];
		}
	}
	
	public function aparellsActius(){
		$numero=0;
		for($i=0;$i<count($this->aparells);$i++){
			if($this->aparells[$i]->getActiu()==true){		
				$numero++;
			}
		}
		return $numero;
	}
	
	
//Mètodes vol
	public function getVols(){
		return $this->vols;
	}
	
	public function cercaVol($idVol){
		$pos=-1;
		for ($i = 0; $i<count($this->vols); $i++){
			if (($this->vols[$i]->getIdVol()==$idVol)&&($this->vols[$i]->getActiu()==true)){
				$pos=$i;
			}
		}
		return $pos;
	}
	
	public function modificaVol($idAparell,$longitud,$pes,$consumXhora){
		$pos=$this->cercaAparell($idAparell);
		if($pos!=-1){
			$this->aparells[$pos]->setLongitud($longitud);
			$this->aparells[$pos]->setPes($pes);
			$this->aparells[$pos]->setConsumXhora($consumXhora);
		}
	}
	
	public function volsActius(){
		$numero=0;
		for($i=0;$i<count($this->aparells);$i++){
			if($this->aparells[$i]->getActiu()==true){		
				$numero++;
			}
		}
		return $numero;
	}
	
}
