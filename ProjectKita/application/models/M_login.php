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
    
}