<?php
class M_data extends CI_Model{
    function tampil_data(){
        
        return $this->db->get_where('perbaikan',['jenis_perbaiki'=>'Jalan']);
    }
    function tampil_bengkel(){
        
        return $this->db->get_where('perbaikan',['jenis_perbaiki'=>'Bengkel']);
    }
    function tampil_part(){
        return $this->db->get('sparepart');
    }
    
    function tambah_montir($data,$table){
        $this->db->insert($table,$data);
    }
    function tambah_part($data,$table){
        $this->db->insert($table,$data);
    }
    function delete_part($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    function edit($where,$table){
       return $this->db->get_where($table,$where);
    }
    function ubah_part($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    function edit_perbaikan($where,$table){
        return $this->db->get_where($table,$where);
    }
    function ganti_perbaikan($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

}