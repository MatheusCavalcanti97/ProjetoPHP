<?php

class PessoaModel extends CI_Model{

    public function get_pessoa(){
        
        if(!empty($this->input->get("search"))){
          $this->db->like('idCategoriaPessoa', $this->input->get(search));
          $this->db->or_like('nome', $this->input->get("search"));
          $this->db->or_like('cpf', $this->input->get("search"));
          $this->db->or_like('campus', $this->input->get("search"));
          $this->db->or_like('matricula', $this->input->get("search"));
        }
        $query = $this->db->get("pessoa");
        return $query->result();
    }

    public function inserir(){    
        $data = array(
            'idCategoriaPessoa' => $this->input->post('idCategoriaPessoa'),
            'nome' => $this->input->post('nome'),
            'cpf' => $this->input->post('cpf'),
            'campus' => $this->input->post('campus'),
            'matricula' => $this->input->post('matricula')
            
        );
        return $this->db->insert('pessoa', $data);
    }

    public function atualizar($id){
        $data=array(
            'idCategoriaPessoa' => $this->input->post('idCategoriaPessoa'),
            'nome' => $this->input->post('nome'),
            'cpf' => $this->input->post('cpf'),
            'campus' => $this->input->post('campus'),
            'matricula' => $this->input->post('matricula')
        );

        if($id==0){
            return $this->db->insert('pessoa',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('pessoa',$data);
        }        

    }

    public function pesquisar($id){
        return $this->db->get_where('pessoa', array('id' => $id))->row();
    }

    public function excluir($id){
        return $this->db->delete('pessoa', array('id' => $id));
    }
}
?>