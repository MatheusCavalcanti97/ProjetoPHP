<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function novo(){
    $usuario = array (
        "nomeUser" =>$this->input->post('nomeUser'),
        "senha" => md5 ($this->input->post('senha'))
    );
    $this->load->model("usuarioModel");
    $this->usuarioModel->salvar($usuario);
    $this->load->view('usuarios/novo');
}

}