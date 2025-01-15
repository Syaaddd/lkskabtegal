<?php 
class Matalomba_model extends CI_Model 
{
    public function AllData()
	{
		return $this->db->get('lomba')->result();
	}
}