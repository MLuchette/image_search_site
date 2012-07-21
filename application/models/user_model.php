<?php

class Data_model extends CI_Model {
	
	function search($name = '') {
		$q = $this->db->query("
			select name, id
			from employees
			where name
			like '%{$name}%'
			");
		if($q->num_rows() > 0){
			return $q->result();
		}
	}
	
	function employeeInfo($employeeID){
		$q = $this->db->query("
			select *
			from employees
			where id = {$employeeID}
			");
		return $q->result();			
	}
	
	function getAll() {
		$q = $this->db->query("SELECT * FROM Employees");
		return $q->result();
	}
}