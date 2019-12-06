<?php
include __DIR__.'../gear.php';

class GearControl{
	function insert($obj){
		$gear = new Gear();
		return $gear->insert($obj);		
	}

	function delete($obj,$id){
		$gear = new Gear();
		return $gear->delete($obj,$id);
	}

	function find($id = null){
		$gear = new Gear();
		return $gear->find($id);
	}

	function findAll(){
		$gear = new Gear();
		return $gear->findAll();
	}
}

?>