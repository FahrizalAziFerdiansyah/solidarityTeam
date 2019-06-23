<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Coba extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    //Menampilkan data kontak

    function index_post() { 
        $id_user=$this->input->post('id_user');
        $perbaikan=$this->db->query("SELECT * FROM perbaikan LEFT JOIN montir ON perbaikan.id_montir=montir.id_montir WHERE perbaikan.id_user=$id_user  ORDER BY waktu ")->result();
        //$perbaikan = $this->db->get_where('perbaikan',['id_user'=>$id_user])->result();
        $this->response(array("result"=>$perbaikan, 200));
    }
}
?>