<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Bengkel extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    //Menampilkan data kontak


    function index_get() { 
        $jenis="Bengkel";
        $where=$this->db->where('jenis_perbaiki = ',$jenis);
        $perbaikan = $this->db->get('perbaikan')->result();
        $this->response(array("result"=>$perbaikan, 200));
    }
    function index_post() {
        $jenis="Bengkel";
        $kondisi="Belum Diperbaiki";
        $jam = date("H:i:s");
        $tanggal=date("Y-m-d ");
        $data = array(
                    'id_perbaikan'           => $this->post('id_perbaikan'),
                    'nama'          => $this->post('nama'),
                    'no_hp'           => $this->post('no_hp'),
                    'deskripsi'             => $this->post('deskripsi'),
                    'jenis_perbaiki'             => $jenis,
                    'kondisi'           =>$kondisi,
                    'waktu' => $jam,
                    'tanggal' => $tanggal);
        $insert = $this->db->insert('perbaikan', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }



    

    //Masukan function selanjutnya disini
    //Mengirim atau menambah data perbaikan baru

}
?>