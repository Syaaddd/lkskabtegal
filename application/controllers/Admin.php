<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public $session;
	public $form_validation;
	public $input;
	public $matalomba_model;
	public $db;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('matalomba_model');
		if ($this->session->userdata('level') == null) {
			redirect('login','refresh');
		}
	}
	
	public function index()
	{
		$data = array(
			'Title' => 'Lks Tegal | Admin',
			'isi' => 'backend/b_admin',
		);

		$this->load->view('backend/layout/v_template', $data, FALSE);
	}

	public function matalomba()
	{
		$this->form_validation->set_rules('nama_lomba', 'Nama Lomba', 'required', array(
			'required' => '%s wajib diisi!'
		));
		$this->form_validation->set_rules('keteranganlomba', 'Keterangan Lomba', 'required', array(
			'required' => '%s wajib diisi!'
		));

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'nama_lomba' => $this->input->post('nama_lomba'),
				'keteranganlomba' => $this->input->post('keteranganlomba'),
				'created_at' => date('Y-m-d H:i:s'),
			);
			$this->db->insert('lomba', $data);

			redirect('admin/matalomba');
		} else {
			$data = array(
				'Title' => 'Lks Tegal | Mata Lomba',
				'konten' => $this->matalomba_model->AllData(),
				'isi' => 'backend/b_matalomba',
			);

			$this->load->view('backend/layout/v_template', $data, FALSE);
		}
	}

	public function hapus($id_lomba)
	{
		$data = array(
			'id_lomba' => $id_lomba,
		);
		$this->matalomba_model->Hapus($data);
		redirect('admin/matalomba');
	}

	public function edit()
	{
		$data = $this->input->post();

		// Validasi data
		if (empty($data['nama_lomba']) || empty($data['keteranganlomba'])) {
			$this->session->set_flashdata('error', 'Semua field harus diisi.');
			redirect('admin/matalomba');
		}

		$this->matalomba_model->Edit($data);
		$this->session->set_flashdata('success', 'Data berhasil diubah.');
		redirect('admin/matalomba');
	}
}
