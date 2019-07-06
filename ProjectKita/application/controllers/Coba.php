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

        $perbaikan=$this->db->query("SELECT * FROM perbaikan LEFT JOIN montir ON perbaikan.id_montir=montir.id_montir WHERE perbaikan.id_user=$id_user AND perbaikan.kondisi!='cancel' AND perbaikan.kondisi!='Sudah Membayar' ORDER BY waktu ")->result();
        //$perbaikan = $this->db->get_where('perbaikan',['id_user'=>$id_user])->result();
        $this->response(array("result"=>$perbaikan, 200));
    }
    
    function index_put(){
        $id = $this->put('id');
        $data = array(
            'id' =>$this->put('id'),
            'kondisi'          => $this->put('kondisi'));
        $this->db->where('id',$id);
        $update=$this->db->update('perbaikan',$data);
        if($update){
            $this->response($data,200);
        } else{
            $this->response(array('status'=>'fail',502));
        }
    }

}
?>