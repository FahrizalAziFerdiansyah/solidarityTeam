<?php   
class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->model('m_login');
        $this->load->helper('url');

    }
    function web_user(){
        $this->load->view('user/index');
    }

    function servis(){
        $this->load->view('user/servis');
    }
    
    function login(){
        $this->load->view('login');
    }

    function aksi_login(){
        $username=$this->input->post('username');
        $password = $this->input->post('password');
        $where=array(
            'username'=>$username,
            'password'=>$password
        );
        
        $cek=$this->m_login->cek_login_admin("admin",$where)->num_rows();

        if($cek > 0){
            $data_session=array(
                'username'=>$username,
                'status'=>"login"
            );
            $this->session->set_userdata($data_session);
            echo "<script>
		    alert('Anda berhasil login admin!');
            </script>";
            echo '<script>window.location="index";</script>';
	    
        }else{
            echo "<script>
		    alert('Username atau Password salah!');
            </script>";
            echo '<script>window.location="login";</script>';
        }

        
    }
    function logout(){
        $this->session->sess_destroy();
        echo "<script>
        alert('Anda berhasil keluar!');
        </script>";
        echo '<script>window.location="login";</script>';
    }
       
    public function index()
    {
        $data['user'] = $this->db->get('total_user')->result();
        $data['montir'] = $this->db->get('jumlah_montir')->result();
        $data['jalan'] = $this->db->get('total_jalan')->result();
        $data['bengkel'] = $this->db->get('total_bengkel')->result();
        $this->load->view('admin',$data);
        
    }
    public function pelanggan()
    {
        $data['user'] = $this->db->get('user')->result();
        $this->load->view('pelanggan',$data);   
    }

    
    public function jalan()
    {
        $data['perbaikan'] = $this->db->query("SELECT * FROM perbaikan LEFT JOIN montir ON montir.id_montir=perbaikan.id_montir WHERE jenis_perbaiki='jalan' ")->result();
        $this->load->view('dijalan',$data);
    }
    public function bengkel()
    {   
        $data['perbaikan']=$this->m_data->tampil_bengkel()->result();
        $this->load->view('dibengkel',$data);
    }
    public function montir()
    {   
        $data['montir']=$this->m_data->tampil_montir()->result();
        $this->load->view('montir',$data);
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
        $no=$this->input->post('no');
        $email=$this->input->post('email');
        $password=$this->input->post('password');
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
            'password'=>$password,
            'email'=>$email,
            'no'=>$no,
            'foto'=>$foto
        );
        $this->m_data->tambah_montir($data,'montir');
        redirect ('home/montir');
    }
    public function add_admin()
    {
        
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $data=array(
            'username'=>$username,
            'password'=>$password
        );
        $this->m_data->tambah_montir($data,'admin');
        echo "<script>
		    alert('Admin Ditambahkan!');
            </script>";
            echo '<script>window.location="index";</script>';
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

    public function hapus($id_part){
        $where=array('id_part'=>$id_part);
        $this->m_data->delete_part($where,'sparepart');
        redirect('home/sparepart');
    }
    public function ubah($id_part){
       $where=array('id_part'=>$id_part);
       $data['sparepart']= $this->m_data->edit($where,'sparepart')->result();
       $this->load->view('v_edit',$data);
    }
    public function edit_part(){
        $id_part=$this->input->post('id_part');
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
            'id_part'=>$id_part
        );
        $this->m_data->ubah_part($where,$data,'sparepart');
        redirect('home/sparepart');

    }
    
    public function perbaikan($id){
        $where=array('id'=>$id);
        $data['perbaikan']=$this->m_data->edit_perbaikan($where,'perbaikan')->result();
        $this->load->view('v_perbaikan',$data);
    }

    public function ubah_perbaikan(){
        $jam = date("H:i:s");
        $tanggal=date("Y-m-d ");
        $kondisi="Belum Membayar";
        $total_bayar=$this->input->post('total_bayar');
        $ulasan=$this->input->post('ulasan');
        $id=$this->input->post('id');
        $nama=$this->input->post('nama');
        //$montir=$this->input->post('montir');
        $data=array(
            'nama'=>$nama,
            'waktu'=>$jam,
            'tanggal'=>$tanggal,
            'kondisi'=>$kondisi,
            'ulasan'=>$ulasan,
            'total_bayar'=>$total_bayar
        );
        $where=array(
            'id'=>$id
        );
        $this->m_data->ganti_perbaikan($where,$data,'perbaikan');
        redirect('home/jalan');
    }

    public function perbaikan_dibengkel($id){
        $where=array('id'=>$id);
        $data['perbaikan']=$this->m_data->edit_perbaikan_bengkel($where,'perbaikan')->result();
        $this->load->view('v_perbaikan_bengkel',$data);
    }

    public function ubah_perbaikan_bengkel(){
        $jam = date("H:i:s");
        $tanggal=date("Y-m-d ");
        $kondisi=$this->input->post('kondisi');
        $bayar="0";
        $id=$this->input->post('id');
        $nama=$this->input->post('nama');
        $data=array(
            'nama'=>$nama,
            'waktu'=>$jam,
            'tanggal'=>$tanggal,
            'kondisi'=>$kondisi,
            'total_bayar'=>$bayar
        );
        $where=array(
            'id'=>$id
        );
        $this->m_data->ganti_perbaikan_bengkel($where,$data,'perbaikan');
        redirect('home/bengkel');
    }
    public function hapus_montir($id_montir){
        $where=array('id_montir'=>$id_montir);
        $this->m_data->delete_montir($where,'montir');
        redirect('home/montir');
    }
    public function hapus_jalan($id){
        $where=array('id'=>$id);
        $this->m_data->delete_jalan($where,'perbaikan');
        redirect('home/jalan');
    }
    public function hapus_bengkel($id){
        $where=array('id'=>$id);
        $this->m_data->delete_bengkel($where,'perbaikan');
        redirect('home/bengkel');
    }
    public function hapus_user($id_user){
        $where=array('id_user'=>$id_user);
        $this->m_data->delete_user($where,'user');
        redirect('home/pelanggan');
    }


    

}