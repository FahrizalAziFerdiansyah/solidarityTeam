<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Daftar extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    function index_get() { 
        $montir = $this->db->get('total_bengkel')->row_array();
        $this->response($montir, 200);
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
    function index_put() {
        $id = $this->put('id');
        $kondisi="cancel";
        $data = array(
            'id' =>$this->put('id'),
            'kondisi'=>"cancel");
        $this->db->where('id', $id);
        $delete = $this->db->delete('eks_perbaikan');
        if ($delete) {
            $this->response(array('result' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}    