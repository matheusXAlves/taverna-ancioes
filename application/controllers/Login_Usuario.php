<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_Usuario extends CI_Controller {

	public function index(){
		$this->load->view('login_usuario');
	}
	
	public function Logar() {
		
        $dados = $this->input->post();
        
        $usuario = $dados['login_usuario'];
        $senha = sha1($dados['senha_usuario']);

        $usuario_db = $this->Model_Usuario->GetUser($dados['login_usuario']);
        
        if ($usuario == $usuario_db['login_usuario'] && $senha == $usuario_db['senha_usuario']) {
			$this->session->set_userdata("usuario_logado", $usuario_db);
			$this->session->set_flashdata("success", "Logado com sucesso!");
			redirect(base_url('home'));
		} else {
			$this->session->set_flashdata("danger", "CPF/CNPJ ou senha invalidos!");
			$this->load->view('login_cadastro', $dados);
		}
    }


	public function Logout(){
		$this->session->unset_userdata("usuario_logado");
		$this->session->sess_destroy();
		redirect(base_url('home'));
		
	}

}
	