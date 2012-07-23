<?php

class BusinessModel extends CI_Model {
	
	function getAll(){
		$q = $this->db->query("
			SELECT *
			FROM business
			ORDER by id
			");
		return $q->result();			
	}
}