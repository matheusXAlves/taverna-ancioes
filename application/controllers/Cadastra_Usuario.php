<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cadastra_Usuario extends CI_Controller {

	public function index(){
		$this->load->view('cadastro_usuario');
	}
	
	public function Salvar() {
            $dados = $this->input->post();

            $senha_encrypt = sha1($dados['senha_usuario']);

            $dados['senha_usuario'] = $senha_encrypt;

            $status = $this->Model_Usuario->Insert($dados);

            if(!$status){
                $this->session->set_flashdata('error', 'Não foi possível cadastrar o usuario');
            }else{
                $this->session->set_flashdata('success', 'Usuario cadastrado com sucesso.');
                redirect(base_url('cadastro-login'));
            }


        $this->load->view('cadastro_usuario', $dados);
    }
}
