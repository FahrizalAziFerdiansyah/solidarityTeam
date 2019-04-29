<?php
class Download extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper(array('url','download'));
    }
    public function index(){
        $this->load->view('v_download');
    }
    public function lakukan_download(){
        force_download('gambar/fhrzl.jpg',NULL);
    }

    public function a(){
        
        $this->load->library('fhrzl');
        $this->fhrzl->nama_saya();
        echo "<br>";
        $this->fhrzl->nama_kamu("Fahrizal");
    }
}

?>