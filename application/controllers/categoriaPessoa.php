<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CategoriaPessoa extends CI_Controller {

public $categoriaPessoa;

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('CategoriaPessoaModel');
        $this->categoriaPessoa = new CategoriaPessoaModel;
    }
    
    public function index() {
        $data['data'] = $this->categoriaPessoa->get_categoriaPessoa();
        $this->load->view('layout/cabecalho');
        $this->load->view('categoriaPessoa/listar', $data);
        $this->load->view('layout/rodape');
    }

    public function mostrar($id) {
        $categoriaPessoa = $this->categoriaPessoa->pesquisar($id);
        $this->load->view('layout/cabecalho');
        $this->load->view('categoriaPessoa/mostrar', array('categoriaPessoa' => $categoriaPessoa));
        $this->load->view('layout/rodape');
    }

    public function criar() {
        $this->load->view('layout/cabecalho');
        $this->load->view('categoriaPessoa/criar');
        $this->load->view('layout/rodape');
    }

    public function inserir() {

        $this->form_validation->set_rules('descricaoCategoria', 'DescricaoCategoria', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('categoriaPessoa/criar'));
        } else {
            $this->categoriaPessoa->inserir();
            redirect(base_url('categoriaPessoa'));
        }
    }


    public function editar($id) {
        $categoriaPessoa = $this->categoriaPessoa->pesquisar($id);
        $this->load->view('layout/cabecalho');
        $this->load->view('categoriaPessoa/editar', array('categoriaPessoa' => $categoriaPessoa));
        $this->load->view('layout/rodape');
    }

    public function atualizar($id) {
        $this->form_validation->set_rules('descricaoCategoria', 'DescricaoCategoria', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('categoriaPessoa/edit/' . $id));
        } else {
            $this->categoriaPessoa->atualizar($id);
            redirect(base_url('categoriaPessoa'));
        }
    }

    public function excluir($id) {
        $categoriaPessoa = $this->categoriaPessoa->excluir($id);
        redirect(base_url('categoriaPessoa'));
    }
}