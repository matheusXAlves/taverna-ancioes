<?php 
 
class MY_Controller extends CI_Controller {
 
 	public function __construct() {
        parent::__construct();
		
		$logado = $this->session->userdata("usuario_logado");

		//var_dump($logado);
		
		if (is_null($logado)) {
			redirect(base_url('cadastro-login'));
		}

    }
}