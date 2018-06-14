<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_Grupo extends MY_Model {
  
    function __construct() {
        parent:: __construct();
        $this->table = 'tb_grupo';
    }

    function GetAll($sort = 'idtb_grupo', $order = 'desc') {
		$this->db->order_by($sort, $order);
		$query = $this->db->get($this->table);
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return null;
		}
	}
}
