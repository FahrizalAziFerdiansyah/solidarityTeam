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
        $perbaikan=$this->db->query("SELECT * FROM perbaikan WHERE jenis_perbaiki ='Bengkel' AND perbaikan.kondisi!='cancel' AND perbaikan.kondisi!='Perbaikan Selesai' ORDER BY waktu ")->result();
        $this->response(array("result"=>$perbaikan, 200));
    }
    function index_post() {
        $jenis="Bengkel";
        $kondisi="Belum Diperbaiki";
        $jam = date("H:i:s");
        $tanggal=date("Y-m-d ");
        $data = array(
                    'id'           => $this->post('id'),
                    'nama'          => $this->post('nama'),
                    'no_hp'           => $this->post('no_hp'),
                    'deskripsi'             => $this->post('deskripsi'),
                    'id_user'             => $this->post('id_user'),
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