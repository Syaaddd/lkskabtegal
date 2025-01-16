<?php 
class Matalomba_model extends CI_Model 
{
    public function AllData()
	{
		return $this->db->get('lomba')->result();
	}

	public function Edit($data)
	{
		$this->db->where('id_lomba', $data['id_lomba']);
		$result = $this->db->update('lomba', $data);
	
		if (!$result) {
			// Jika gagal, tampilkan error
			echo $this->db->last_query(); // Tampilkan query terakhir untuk debugging
			echo $this->db->error();     // Tampilkan error database
			die();
		}
	}
	

	public function Hapus($data)
	{
		$this->db->where('id_lomba', $data['id_lomba']); 
		$this->db->delete('lomba');
	}

	public function countpeserta() {
        $this->load->database();
        $this->db->where('level', 'peserta'); // Ganti 'kolom' dan 'nilai' sesuai kebutuhan
        $count = $this->db->count_all_results('user'); // Ganti 'nama_tabel' dengan tabel Anda
        return $count;
    }

	public function countvalidasi() {
        $this->load->database();
        $this->db->where('level', 'peserta'); // Kondisi pertama
		$this->db->where('validasi', 'Sudah');    // Kondisi kedua
        $count = $this->db->count_all_results('user'); // Ganti 'nama_tabel' dengan tabel Anda
        return $count;
    }

	public function countmatalomba() {
        $this->load->database();
        $count = $this->db->count_all('lomba'); 
        return $count;
    }
}
