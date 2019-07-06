<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Detail extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    function index_post() { 
        $id_montir=$this->input->post('id_montir');
        $perbaikan=$this->db->query("SELECT  * FROM perbaikan INNER JOIN montir ON perbaikan.id_montir=montir.id_montir WHERE perbaikan.id_montir=$id_montir")->result();
       // $perbaikan = $this->db->get_where('eks_perbaikan',['id_user'=>$id_user])->result();
         $this->response(array("result"=>$perbaikan, 200));
        
    }
}