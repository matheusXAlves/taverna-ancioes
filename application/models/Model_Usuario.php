<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_Usuario extends MY_Model {
  
    function __construct() {
        parent:: __construct();
        $this->table = 'tb_usuario';
    }

    function GetUser($login_usuario){
        if(is_null($login_usuario))
            return false;
        $this->db->where('login_usuario', $login_usuario);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return null;
        }
    }
}
