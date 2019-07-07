<?php

class SalaModel extends CI_Model{

    public function get_sala(){
        if(!empty($this->input->get("search"))){
          $this->db->like('idBloco', $this->input->get(search));
          $this->db->or_like('quantCadeiras', $this->input->get("search"));
          $this->db->or_like('quantMonitores', $this->input->get("search"));
          $this->db->or_like('quantProjetor', $this->input->get("search"));
          $this->db->or_like('quantArCondicionado', $this->input->get("search"));
          $this->db->or_like('numSala', $this->input->get("search"));
          $this->db->or_like('observacoes', $this->input->get("search"));
          
        }
        $query = $this->db->get("sala");
        return $query->result();
    }
    public function inserir(){    
        $data = array(
            'idBloco' => $this->input->post('idBloco'),
            'quantCadeiras' => $this->input->post('quantCadeiras'),
            'quantMonitores' => $this->input->post('quantMonitores'),
            'quantProjetor' => $this->input->post('quantProjetor'),
            'quantArCondicionado' => $this->input->post('quantArCondicionado'),
            'numSala' => $this->input->post('numSala'),
            'observacoes' => $this->input->post('observacoes'),
            
        );
        return $this->db->insert('sala', $data);
    }

    public function atualizar($id){
        $data=array(
            'idBloco' => $this->input->post('idBloco'),
            'quantCadeiras' => $this->input->post('quantCadeiras'),
            'quantMonitores' => $this->input->post('quantMonitores'),
            'quantProjetor' => $this->input->post('quantProjetor'),
            'quantArCondicionado' => $this->input->post('quantArCondicionado'),
            'numSala' => $this->input->post('numSala'),
            'observacoes' => $this->input->post('observacoes'),
        );

        if($id==0){
            return $this->db->insert('sala',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('sala',$data);
        }        

    }

    public function pesquisar($id){
        return $this->db->get_where('sala', array('id' => $id))->row();
    }

    public function excluir($id){
        return $this->db->delete('sala', array('id' => $id));
    }
}
?>