<?php

class CategoriaPessoaModel extends CI_Model{

    public function get_categoriaPessoa(){
        if(!empty($this->input->get("search"))){
          $this->db->like('descricaoCategoria', $this->input->get("search"));
        }
        $query = $this->db->get("categoriaPessoa");
        return $query->result();
    }

    public function inserir(){    
        $data = array(
            'descricaoCategoria' => $this->input->post('descricaoCategoria'),
        );
        return $this->db->insert('categoriaPessoa', $data);
    }

    public function atualizar($id){
        
        $data=array(
            'descricaoCategoria' => $this->input->post('descricaoCategoria'),
        );

        if($id==0){
            return $this->db->insert('categoriaPessoa',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('categoriaPessoa',$data);
        }        
    }

    public function pesquisar($id){
        return $this->db->get_where('categoriaPessoa', array('id' => $id))->row();
    }
    
    public function excluir($id){
        return $this->db->delete('categoriaPessoa', array('id' => $id));
    }
}
?>