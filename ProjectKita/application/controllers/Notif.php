<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Notif extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    
    function index_post() { 
        $id_user=$this->input->post('id_user');
        $perbaikan=$this->db->query("SELECT  * FROM eks_perbaikan INNER JOIN montir ON eks_perbaikan.id_montir=montir.id_montir WHERE eks_perbaikan.id_user=$id_user AND eks_perbaikan.total_bayar != 0 AND eks_perbaikan.kondisi !='cancel' ORDER BY waktu DESC LIMIT 1")->row_array();
       // $perbaikan = $this->db->get_where('eks_perbaikan',['id_user'=>$id_user])->result();
         $this->response($perbaikan, 200);
        
    }
}