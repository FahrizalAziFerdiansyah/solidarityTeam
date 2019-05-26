<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Montir extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    //Menampilkan data kontak


    function index_get() { 
        $montir = $this->db->get('montir')->result();
        $this->response(array("result"=>$montir, 200));
    }

    

    //Masukan function selanjutnya disini
    //Mengirim atau menambah data perbaikan baru

}
?>