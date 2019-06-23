<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Daftar extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }


    function index_post() {
        $data = array(
                    //'id_user'           => $this->post('id_user'),
                    'username'          => $this->post('username'),
                    'password'          => $this->post('password'),
                    'no_hp'           => $this->post('no_hp'));
        $insert = $this->db->insert('user', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}    