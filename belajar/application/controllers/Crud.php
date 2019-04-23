<?php
class Crud extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }
    public function index(){
        $data['pelanggan']=$this->m_data->tampil_data()->result();
        $this->load->view('v_tampil',$data);
    }
    public function add(){
        $this->load->view('v_add');
    }
    public function add_action(){
        $nama=$this->input->post('nama');
        $sandi=$this->input->post('sandi');
        $email=$this->input->post('email');
        $no_hp=$this->input->post('no_hp');

        $data=array(
            'nama'=>$nama,
            'sandi'=>$sandi,
            'email'=>$email,
            'no_hp'=>$no_hp
        );
        $this->m_data->add_data($data,'pelanggan');
        redirect('crud/index');
    }

    public function hapus($id_user){
        $where=array('id_user'=>$id_user);
        $this->m_data->delete($where,'pelanggan');
        redirect('crud/index');
    }

     function edit($id_user){
        $where=array('id_user'=>$id_user);
        $data['pelanggan']=$this->m_data->ubah($where,'pelanggan')->result();
        $this->load->view('v_edit',$data);
        
    }

    function update(){
        $id_user = $this->input->post('id_user');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $no_hp = $this->input->post('no_hp');
     
        $data = array(
            'nama' => $nama,
            'email' => $email,
            'no_hp' => $no_hp
        );
     
        $where = array(
            'id_user' => $id_user
        );
     
        $this->m_data->update_data($where,$data,'pelanggan');
        redirect('crud/index');
    }
}

?>