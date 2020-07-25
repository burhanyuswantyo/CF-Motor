<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gejala_model extends CI_Model
{
	public function getKode()
	{
		$this->db->select_max('kode', 'kode');
		$query = $this->db->get('gejala')->row_array();

		$data = $query['kode'];
		$noUrut = (int) substr($data, 1, 2);
		$noUrut++;

		$kode = 'G' . sprintf('%02s', $noUrut);
		return $kode;
	}

	public function getGejala()
	{
		return $this->db->get('gejala')->result_array();
	}

	public function getGejalaId($id)
	{
		return $this->db->get_where('gejala', ['id' => $id])->row_array();
	}

	public function insert()
	{
		$data = [
			'kode' => $this->input->post('kode'),
			'gejala' => $this->input->post('gejala')
		];

		$this->db->insert('gejala', $data);
	}

	public function update($id)
	{
		$data = [
			'gejala' => $this->input->post('gejala')
		];

		$this->db->update('gejala', $data, ['id' => $id]);
	}

	public function delete($id)
	{
		$this->db->delete('gejala', ['id' => $id]);
	}

	public function count()
	{
		return $this->db->get('gejala')->num_rows();
	}

	function getListById($id)
	{
		$query = "select id, kode, gejala from gejala where id in (" . $id . ")";
		return $this->db->query($query);
	}
}
