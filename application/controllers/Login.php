<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function proses_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');


        $cekuser = $this->Login_model->cekuser($username);
        if ($cekuser) {
            $ceklogin = $this->Login_model->ceklogin($username, $password);
            if ($ceklogin) {
                foreach ($ceklogin as $row) {

                    if ($row->validasi == "Sudah") {
                        $this->session->set_userdata('username', $row->username);
                        $this->session->set_userdata('nama', $row->nama);
                        $this->session->set_userdata('level', $row->level);
                        $this->session->set_userdata('email', $row->email);

                        if (($this->session->userdata('level') == "Admin") || ($this->session->userdata('level') == "User")) {
                            redirect('admin', 'refresh');
                        } else {
                            echo "<script>alert('Maaf Anda tidak memiliki hak akses.');</script>";
                            redirect('Login', 'refresh');
                        }
                    } else {
                        echo "<script>alert('Maaf Username belum aktif.');</script>";
                        redirect('Login', 'refresh');
                    }
                }
            } else {
                echo "<script>alert('Maaf Username atau Password salah.');</script>";
                redirect('Login', 'refresh');
            }
        } else {
            echo "<script>alert('Username belum terdaftar.');</script>";
            redirect('Login', 'refresh');
        }
    }
}
