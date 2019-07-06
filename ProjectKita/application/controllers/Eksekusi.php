<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Eksekusi extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    //Menampilkan data kontak




    function index_post() { 
        $id_user=$this->input->post('id_user');
        $perbaikan=$this->db->query("SELECT  * FROM eks_perbaikan INNER JOIN montir ON eks_perbaikan.id_montir=montir.id_montir WHERE eks_perbaikan.id_user=$id_user AND eks_perbaikan.total_bayar != 0  ORDER BY waktu DESC LIMIT 1")->result();
       // $perbaikan = $this->db->get_where('eks_perbaikan',['id_user'=>$id_user])->result();
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
    

    //Masukan function selanjutnya disini
    //Mengirim atau menambah data perbaikan baru

}
?>