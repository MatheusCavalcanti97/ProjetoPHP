<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sala extends CI_Controller {

public $sala;

public function __construct() {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('SalaModel');
    $this->sala = new SalaModel;
}

    public function index() {
        
        $data['data'] = $this->sala->get_sala();
        $this->load->view('layout/cabecalho');
        $this->load->view('sala/listar', $data);
        $this->load->view('layout/rodape');
    }
    
    public function mostrar($id) {
        $sala = $this->sala->pesquisar($id);
        $this->load->view('layout/cabecalho');
        $this->load->view('sala/mostrar.', $id, array('sala' => $sala));
        $this->load->view('layout/rodape');
    }

    public function criar() {
        $this->load->view('layout/cabecalho');
        $this->load->view('sala/criar');
        $this->load->view('layout/rodape');
    }


    public function inserir() {
        
       
        $this->form_validation->set_rules('quantCadeiras', 'QuantCadeiras', 'required');
        $this->form_validation->set_rules('quantMonitores', 'QuantMonitores', 'required');
        $this->form_validation->set_rules('quantProjetor', 'QuantProjetor', 'required');
        $this->form_validation->set_rules('quantArCondicionado', 'QuantArCondicionado', 'required');
        $this->form_validation->set_rules('numSala', 'NumSala', 'required');
        $this->form_validation->set_rules('observacoes', 'Observacoes', 'required');
        $this->form_validation->set_rules('idBloco', 'IdBloco', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('sala/criar'));
        } else {
            $this->sala->inserir();
            redirect(base_url('sala'));
        }
    }


    public function editar($id) {
        $sala = $this->sala->pesquisar($id);
        $this->load->view('layout/cabecalho');
        $this->load->view('sala/editar', array('sala' => $sala));
        $this->load->view('layout/rodape');
    }

    public function atualizar($id) {
       
        $this->form_validation->set_rules('quantCadeiras', 'QuantCadeiras', 'required');
        $this->form_validation->set_rules('quantMonitores', 'QuantMonitores', 'required');
        $this->form_validation->set_rules('quantProjetor', 'QuantProjetor', 'required');
        $this->form_validation->set_rules('quantArCondicionado', 'QuantArCondicionado', 'required');
        $this->form_validation->set_rules('numSala', 'NumSala', 'required');
        $this->form_validation->set_rules('observacoes', 'Observacoes', 'required');
        $this->form_validation->set_rules('idBloco', 'IdBloco', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('sala/edit/' . $id));
        } else {
            $this->sala->atualizar($id);
            redirect(base_url('sala'));
        }
    }

    public function excluir($id) {
        $sala = $this->sala->excluir($id);
        redirect(base_url('sala'));
    }
}