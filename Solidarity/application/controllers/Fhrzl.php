<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fhrzl extends CI_Controller {

    public function index(){
        

        $this->header();
        $this->isi();
        $this->footer();
    }

    public function profil($value='', $value1=''){
        echo "Ini function profil ".$value. " dan aku sayang kamu ".$value1 ;
    }

    //--Views--
    public function header(){
      $this->load->view('header');  
    } 

    public function isi(){
        $data = array ( 'nama' => 'fahrizalAzi',
        'status' => 'Mahasiswa'
        );
        $this->load->view('index', $data);  
      } 

      public function footer(){
        $this->load->view('footer');  
      } 
}