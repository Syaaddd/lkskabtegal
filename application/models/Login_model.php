<?php

class Login_model extends CI_Model
{
    function cekuser($username)
    {
        // Perbaikan sintaks SQL
        $query = $this->db->query("SELECT * FROM user WHERE username = '$username'");

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function ceklogin($username, $password)
    {
        // Perbaikan sintaks SQL
        $query = $this->db->query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
}
