<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Montir extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('m_login');
    }

    //Menampilkan data kontak
    //Menampilkan data kontak
    


    function index_get() { 
        $montir = $this->db->get('montir')->result();
        $this->response(array("result"=>$montir, 200));
    }

    function index_post(){
        $username=$this->input->post('nama_montir');
        $password = $this->input->post('password');
        $where=array(
            'nama_montir'=>$username,
            'password'=>$password
        );
        
        // $cek=$this->m_login->cek_login_biasa($username,$password)->num_rows();
        $cek=$this->m_login->cek_login_montir($username,$password);
    
       // echo $cek;

       /* if ($cek) {
            $this->response(array('status'=> 'oke','id'=>$cek['id_user']));
        }*/
        if ($cek) {
            $output['nama_montir'] = $username;
            $output['no'] = $cek['no']; 
            $output['id_montir'] = $cek['id_montir'];
            $output['foto'] = $cek['foto'];
            $output['email'] = $cek['email'];
            $this->response($output,200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }

        
    }

    function index_put() {
        $id = $this->put('id');
        $data = array(
                    'id'       => $this->put('id'),
                    'kondisi'          => $this->put('kondisi'),
                    'ulasan'          => $this->put('ulasan'),
                    'id_montir'          => $this->put('id_montir')
                );
        $this->db->where('id', $id);
        $update = $this->db->update('perbaikan', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Masukan function selanjutnya disini
    //Mengirim atau menambah data perbaikan baru

}
?>