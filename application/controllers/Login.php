<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function autenticar(){
        $this->load->model("usuarioModel");
        $nomeUser = $this->input->post("nomeUser");
        $senha = md5 ($this->input->post("senha"));
        $usuario = $this->usuarioModel->logarUsuarios($nomeUser, $senha);
        if($usuario){
                $this->session->set_userdata("usuario_logado", $usuario);
                $this->session->set_flashdata("sucess", "Logado com Sucesso");
        } else{
            $this->session->set_flashdata("danger", "Usuário ou senha Inválidos");
        }
        redirect(base_url('/'));
    }

}