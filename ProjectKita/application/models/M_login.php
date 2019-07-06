<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function cek_login($username,$password){		
        $this->db->where('username', $username);
	    $this->db->where('password', $password);
	    $data = $this->db->get('user')->row_array();
	    return $data;
    }
    
    function cek_login_montir($username,$password){		
        $this->db->where('nama_montir', $username);
	    $this->db->where('password', $password);
	    $data = $this->db->get('montir')->row_array();
	    return $data;
    }	
    function cek_login_admin($table,$where){		
		return $this->db->get_where($table,$where);
	}	
    
}