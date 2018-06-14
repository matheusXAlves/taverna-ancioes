<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Criar_Eventos extends MY_Controller {

	public function Criar_Evento()
	{
		$this->load->view('templates/header');
		$this->load->view('criar_eventos');
		$this->load->view('templates/footer');
	}

	public function Salvar_Evento()
	{
		$dados = $this->input->post();

		if(!isset($dados['id_usuario'])){
			//$dados['id_usuario'] = $this->session->userdata('usuario_logado')['id_usuario'];
		}

		$dt_evento = $dados['dta_evento'];

        $dados['dta_evento'] = date('Y-m-d', strtotime($dt_evento));

		$status = $this->Model_Evento->Insert($dados);

        if(!$status){
            $this->session->set_flashdata('error', 'Não foi possível cadastrar o usuario');
        }else{
            $this->session->set_flashdata('success', 'Usuario cadastrado com sucesso.');
            redirect(base_url('eventos'));
        }

		$this->load->view('criar_eventos', $dados);
	}
}
