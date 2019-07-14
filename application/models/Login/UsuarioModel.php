<?php

class UsuarioModel extends CI_Model{

    public function salvar($usuario){
        $this->db->insert("usuarios", $usuario);
    }

    public function logarUsuarios($nomeUser, $senha){
        $this->db->where("nomeUser", $nomeUser);
        $this->db->where("senha", $senha);
        $usuario = $this->db->get("usuarios")->row_array();
        return usuario;
    }


}