<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Eksekusi extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    //Menampilkan data kontak


    function index_get() { 
        $perbaikan = $this->db->get('eks_perbaikan')->result();
        $this->response(array("result"=>$perbaikan, 200));
    }

    

    //Masukan function selanjutnya disini
    //Mengirim atau menambah data perbaikan baru

}
?>