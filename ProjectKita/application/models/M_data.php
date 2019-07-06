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

    function tampil_montir(){
        return $this->db->get('montir');
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
    function delete_montir($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    function delete_jalan($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    function delete_bengkel($where,$table){
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
    function edit_perbaikan_bengkel($where,$table){
        return $this->db->get_where($table,$where);
    }

    function ganti_perbaikan_bengkel($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function total_user(){
        $query=$this->db->query('SELECT COUNT(id_user) as total FROM user');
        return $query->result();
    }

}