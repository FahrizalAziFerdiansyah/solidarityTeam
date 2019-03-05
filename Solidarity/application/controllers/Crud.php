<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

    public function index(){

        $data['content'] = $this->db->get('mahasiswa');
        $this->load->view('crud/index',$data);
    }
    public function add(){

    }
    public function delete($NIM = null){

    }
}
