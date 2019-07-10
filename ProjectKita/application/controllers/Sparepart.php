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



function index_post() { 
    $id_user=$this->input->post('id_user');
    $perbaikan=$this->db->query("SELECT * FROM perbaikan LEFT JOIN montir ON perbaikan.id_montir=montir.id_montir WHERE perbaikan.id_user=$id_user AND perbaikan.kondisi !='Belum Diperbaiki' AND perbaikan.kondisi !='cancel' AND perbaikan.kondisi!='Belum Membayar' AND perbaikan.kondisi!='Sudah Membayar'ORDER BY id DESC")->row_array();
        if($perbaikan){
            $output['kondisi']=$perbaikan['kondisi'];
            $output['nama']=$perbaikan['nama'];
            $output['nama_montir']=$perbaikan['nama_montir'];
            $output['foto']=$perbaikan['foto'];
            $output['waktu']=$perbaikan['waktu'];
            $output['id_user']=$perbaikan['id_user'];
            $this->response($output, 200);}
}

}
?>