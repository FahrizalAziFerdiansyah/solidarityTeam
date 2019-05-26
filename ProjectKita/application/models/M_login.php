<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function cek_login($username, $password)
    {
        $result = $this->db->query("SELECT
                                        *
                                    FROM
                                        user
                                    WHERE
                                        username = '$username'
                                    AND PASSWORD = '$password'");
        return $result->result();
    }
}