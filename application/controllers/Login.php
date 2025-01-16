<?php

class Login extends CI_Controller
{
	public $input;
	public $Login_model;
	public $session;

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

                        $this->session->set_userdata('username', $row->username);
                        $this->session->set_userdata('level', $row->level);
						$this->session->set_userdata('validasi', $row->validasi);


                        if (($this->session->userdata('level') == "Admin")) {

							$this->session->set_userdata([
								'logged_in' => TRUE, 
							]);
                            redirect('admin', 'refresh');

                        } if (($this->session->userdata('level') == "koordinator")) {

							$this->session->set_userdata([
								'logged_in' => TRUE, 
							]);
                            redirect('admin', 'refresh');
							
                        } if (($this->session->userdata('level') == "pendamping") || ($this->session->userdata('level') == "peserta")) {

							$this->session->set_userdata([
								'logged_in' => TRUE, 
							]);
                            redirect('/', 'refresh');
							
                        }else {
                            echo "<script>alert('Maaf Anda tidak memiliki hak akses.');</script>";
                            redirect('Login', 'refresh');
                        }
                }
            } else {
                echo "<script>alert('Maaf Username atau Password salah.');</script>";
                redirect('Login', 'refresh');
            }
        } else {
            echo "<script>alert('Akun belum terdaftar.');</script>";
            redirect('Login', 'refresh');
        }
    }
	function logout()
	{
		$this->session->sess_destroy();
		redirect('/','refresh');
		
	}
}
