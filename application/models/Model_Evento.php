<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_Evento extends MY_Model {
  
    function __construct() {
        parent:: __construct();
        $this->table = 'tb_eventos';
    }
}
