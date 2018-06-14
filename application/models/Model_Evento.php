<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_Evento extends MY_Model {
  
    function __construct() {
        parent:: __construct();
        $this->table = 'tb_eventos';
    }

    function GetAll($sort = 'id_eventos', $order = 'desc') {
		$this->db->order_by($sort, $order);
		$query = $this->db->get($this->table);
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return null;
		}
	}
}
