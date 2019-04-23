<?php
class M_data extends CI_Model{
    function tampil_data(){
      return  $this->db->get('pelanggan');
    }
    function add_data($data,$table){
         $this->db->insert($table,$data);
    }
    
    function delete($where,$table){
      $this->db->where($where);
      $this->db->delete($table);
    }
    function ubah($where,$table){		
      return $this->db->get_where($table,$where);
    }
    
    function update_data($where,$data,$table){
      $this->db->where($where);
      $this->db->update($table,$data);
    }	
}
