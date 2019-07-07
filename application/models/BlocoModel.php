<?php

class BlocoModel extends CI_Model{

    public function get_bloco(){
        if(!empty($this->input->get("search"))){
          $this->db->like('descricao', $this->input->get("search"));
        }
        $query = $this->db->get("bloco");
        return $query->result();
    }

    public function inserir(){    
        $data = array(
            'descricao' => $this->input->post('descricao'),
        );
        return $this->db->insert('bloco', $data);
    }

    public function atualizar($id){
        
        $data=array(
            'descricao' => $this->input->post('descricao'),
        );

        if($id==0){
            return $this->db->insert('bloco',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('bloco',$data);
        }        
    }

    public function pesquisar($id){
        return $this->db->get_where('bloco', array('id' => $id))->row();
    }
    
    public function excluir($id){
        return $this->db->delete('bloco', array('id' => $id));
    }
}
?>