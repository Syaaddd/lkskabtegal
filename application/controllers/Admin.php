<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('matalomba_model');
	}
	
	public function index()
	{
		$data = array(
			'Title' => 'Lks Tegal | Admin',
			'isi' => 'backend/b_admin',
 		);

		$this->load->view('backend/layout/v_template', $data , FALSE);
	}

	public function matalomba()
	{
		$data = array(
			'Title' => 'Lks Tegal | Mata Lomba',
			'konten' => $this->matalomba_model->AllData(),
			'isi' => 'backend/b_matalomba',
 		);

		$this->load->view('backend/layout/v_template', $data , FALSE);
	}
}
