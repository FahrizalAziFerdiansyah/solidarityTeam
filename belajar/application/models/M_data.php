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
}
