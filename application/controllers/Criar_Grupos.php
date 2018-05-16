<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Criar_Grupos extends MY_Controller {

	public function Criar_Grupo()
	{
		$this->load->view('templates/header');
		$this->load->view('criar_grupo');
		$this->load->view('templates/footer');
	}

	public function Salvar_Grupo()
	{
		$dados = $this->input->post();

		$dados['id_usuario'] = 1;

		$status = $this->Model_Grupo->Insert($dados);

        if(!$status){
            $this->session->set_flashdata('error', 'Não foi possível cadastrar o usuario');
        }else{
            $this->session->set_flashdata('success', 'Usuario cadastrado com sucesso.');
            redirect(base_url('grupos'));
        }

		$this->load->view('criar_grupo', $dados);
	}
}
