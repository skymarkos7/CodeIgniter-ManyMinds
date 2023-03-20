<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogsModel extends CI_Model {	

	public function truncate_logs() {
		
		$this->db->truncate('logs');		 
		header("Location:index");
	}
}
