<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function index(){
		$this->load->view('templates/header');
        $this->load->view('login_cadastro');
        $this->load->view('templates/footer');
	}
	
}
