<?php   
class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');

    }
    public function index()
    {
        $this->load->view("admin");
        
    }
    public function jalan()
    {
        $data['perbaikan']=$this->m_data->tampil_data()->result();
        $this->load->view('dijalan',$data);
    }
    public function bengkel()
    {   
        $data['perbaikan']=$this->m_data->tampil_bengkel()->result();
        $this->load->view('dibengkel',$data);
    }
    public function montir()
    {
        $this->load->view("montir");
    }
    public function sparepart()
    {
        $data['sparepart']=$this->m_data->tampil_part()->result();
        $this->load->view('sparepart',$data);
    }
    public function tambah()
    {
        $this->load->view("tambah");
    }
    public function add_montir()
    {
        
        $nama_montir=$this->input->post('nama_montir');
        $no_hp=$this->input->post('no_hp');
        $email=$this->input->post('email');
        $foto=$_FILES['foto'];
        if($foto=''){}
            else{
                $config['upload_path']='./berkas';
                $config['allowed_types']='gif|jpg|png';
            $this->load->library('upload',$config);
            
            if ( ! $this->upload->do_upload('foto')){
                echo "Ukuran Foto Terlalu Besar"; die();
            }else{
                $foto=$this->upload->data('file_name');
            }
            }

        $data=array(
            'nama_montir'=>$nama_montir,
            'no_hp'=>$no_hp,
            'email'=>$email,
            'foto'=>$foto
        );
        $this->m_data->tambah_montir($data,'montir');
        redirect ('home/montir');
    }
    public function add_part()
    {
        $nama=$this->input->post('nama');
        $harga=$this->input->post('harga');
        $deskripsi=$this->input->post('deskripsi');
        $stok=$this->input->post('stok');
        $foto=$_FILES['foto'];
        if($foto=''){}
            else{
                $config['upload_path']='./berkas';
                $config['allowed_types']='gif|jpg|png';

            
                
            $this->load->library('upload',$config);
            
            if ( ! $this->upload->do_upload('foto')){
                echo "Ukuran Foto Terlalu Besar"; die();
            }else{
                $foto=$this->upload->data('file_name');
            }
            }
        $data=array(
            'nama'=>$nama,
            'harga'=>$harga,
            'deskripsi'=>$deskripsi,
            'stok'=>$stok,
            'foto'=>$foto
        );
        $this->m_data->tambah_part($data,'sparepart');
        redirect ('home/sparepart');
    }

    public function hapus($id){
        $where=array('id'=>$id);
        $this->m_data->delete_part($where,'sparepart');
        redirect('home/sparepart');
    }
    public function ubah($id){
       $where=array('id'=>$id);
       $data['sparepart']= $this->m_data->edit($where,'sparepart')->result();
       $this->load->view('v_edit',$data);
    }
    public function edit_part(){
        $id=$this->input->post('id');
        $nama=$this->input->post('nama');
        $harga=$this->input->post('harga');
        $deskripsi=$this->input->post('deskripsi');
        $stok=$this->input->post('stok');
        
        $data=array(
            'nama'=>$nama,
            'harga'=>$harga,
            'deskripsi'=>$deskripsi,
            'stok'=>$stok
        );

        $where=array(
            'id'=>$id
        );
        $this->m_data->ubah_part($where,$data,'sparepart');
        redirect('home/sparepart');

    }

}