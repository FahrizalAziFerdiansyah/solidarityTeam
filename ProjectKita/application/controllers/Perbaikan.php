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
        $perbaikan = $this->db->get_where('perbaikan',['jenis_perbaiki'=>$tempat])->result();
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

    function login_user(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $result=$this->m_login->cek_login($username,$password);
        echo json_encode($result);
    }

}
?>