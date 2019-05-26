<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Login extends REST_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('m_login');
    }
function index_get(){
    $result=$this->m_login->cek_login($username,$password);

        if ($result) {
            $this->response($result,200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
}
function index_post(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $result=$this->m_login->cek_login($username,$password);

        if ($result) {
            $this->response($result,200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>