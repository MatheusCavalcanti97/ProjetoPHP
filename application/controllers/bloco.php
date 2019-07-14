<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Bloco extends CI_Controller {

public $bloco;

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('BlocoModel');
        $this->bloco = new BlocoModel;
    }
    
    public function index() {
        $data['data'] = $this->bloco->get_bloco();
        $this->load->view('layout/cabecalho');
        $this->load->view('bloco/listar', $data);
        $this->load->view('layout/rodape');
    }

    public function mostrar($id) {
        $bloco = $this->bloco->pesquisar($id);
        $this->load->view('layout/cabecalho');
        $this->load->view('bloco/mostrar', array('bloco' => $bloco));
        $this->load->view('layout/rodape');
    }

    public function criar() {
        $this->load->view('layout/cabecalho');
        $this->load->view('bloco/criar');
        $this->load->view('layout/rodape');
    }

    public function inserir() {

        $this->form_validation->set_rules('descricao', 'Descricao', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('bloco/create'));
        } else {
            $this->bloco->inserir();
            redirect(base_url('bloco'));
        }
    }


    public function editar($id) {
        $bloco = $this->bloco->pesquisar($id);
        $this->load->view('layout/cabecalho');
        $this->load->view('bloco/editar', array('bloco' => $bloco));
        $this->load->view('layout/rodape');
    }

    public function atualizar($id) {
        $this->form_validation->set_rules('descricao', 'Descricao', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('bloco/edit/' . $id));
        } else {
            $this->bloco->atualizar($id);
            redirect(base_url('bloco'));
        }
    }

    public function excluir($id) {
        $bloco = $this->bloco->excluir($id);
        redirect(base_url('bloco'));
    }
}