<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;
class Sparepart extends REST_Controller{
function __construct($config = 'rest'){
    parent::__construct($config);
    $this->load->database();
}

function index_get(){
    $sparepart=$this->db->get('sparepart')->result();
    $this->response(array("result"=>$sparepart,200));
}

}
?>