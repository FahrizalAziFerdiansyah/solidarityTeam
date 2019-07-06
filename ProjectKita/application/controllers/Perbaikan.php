<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Perbaikan extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    //Menampilkan data kontak


    /*function index_get() { 
        $perbaikan = $this->db->get('perbaikan')->result();
        $this->response(array("result"=>$perbaikan, 200));
    }*/
    function index_get() { 
        $tempat="Jalan";
        $kondisi="Belum Diperbaiki";
        $kondisi2="Perbaikan Selesai";
        $perbaikan = $this->db->query("SELECT * FROM perbaikan LEFT JOIN montir ON montir.id_montir=perbaikan.id_montir WHERE jenis_perbaiki='jalan' AND kondisi!='cancel' AND perbaikan.kondisi!='Sudah Membayar' ")->result();
        /*$perbaikan = $this->db->where(['jenis_perbaiki'=>$tempat])
                               ->not_like(['kondisi'=>$kondisi2])
                              ->get('perbaikan')->result();*/
                               
        $this->response(array("result"=>$perbaikan, 200));
    }

    

    //Masukan function selanjutnya disini
    //Mengirim atau menambah data perbaikan baru
    
    function index_post() {
        $jenis="Jalan";
        $kondisi="Belum Diperbaiki";
        $jam = date("H:i:s");
        $tanggal=date("Y-m-d ");
        $data = array(
                    'id'           => $this->post('id'),
                    'nama'          => $this->post('nama'),
                    'no_hp'           => $this->post('no_hp'),
                    'alamat'             => $this->post('alamat'),
                    'deskripsi'             => $this->post('deskripsi'),
                    'jenis_perbaiki'             => $jenis,
                    'kondisi'           =>$kondisi,
                    'waktu' => $jam,
                    'tanggal' => $tanggal,
                    'id_user'           => $this->post('id_user'),
                    'LatLong'             => $this->post('LatLong'));
        $insert = $this->db->insert('perbaikan', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put(){
        $id = $this->put('id');
        $total_bayar="0";
        $data = array(
            'id' =>$this->put('id'),
            'id_montir' =>$this->put('id_montir'),
            'ulasan'          => $this->put('ulasan'),
            'total_bayar'          => $total_bayar ,
            'kondisi'=>$this->put('kondisi'));
        $this->db->where('id',$id);
        $update=$this->db->update('perbaikan',$data);
        if($update){
            $this->response($data,200);
        } else{
            $this->response(array('status'=>'fail',502));
        }
    }
    function index_delete() {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('eks_perbaikan');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    

}
?>