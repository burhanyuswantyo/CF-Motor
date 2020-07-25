<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diagnosa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Gejala_model', 'gejala');
		$this->load->model('Perhitungan_model', 'perhitungan');
	}

	public function index($id = 1)
	{
		$data['id'] = $id;
		$data['gejala'] = $this->gejala->getGejalaId($id);

		if ($this->db->get('temp')->num_rows() == $this->gejala->count()) {
			$data['finish'] = true;
		} else {
			$data['finish'] = false;
		}

		$check = $this->db->get_where('temp', ['gejala_id' => $id])->row_array();

		if ($check != null) {
			if ($check['value'] != 0) {
				$data['ya'] = 'checked';
				$data['tidak'] = '';
			} else {
				$data['ya'] = '';
				$data['tidak'] = 'checked';
			}
		} else {
			$data['ya'] = '';
			$data['tidak'] = '';
		}

		$this->load->view('diagnosa/index', $data);
	}

	public function temp()
	{
		$id = $this->input->post('id');

		$check = $this->db->get_where('temp', ['gejala_id' => $id])->row_array();

		$temp = [
			'gejala_id' => $id,
			'value' => $this->input->post('gejala')
		];

		if ($this->gejala->count() == $this->db->get('temp')->num_rows()) {
			redirect('diagnosa/hasil');
		} else {
			if ($id >= $this->gejala->count()) {
				echo 'diisi semua';
			} else {
				if ($check['gejala_id'] == $id) {
					$this->db->update('temp', $temp, ['gejala_id' => $id]);
					redirect('diagnosa/' . ($id + 1));
				} else {
					$this->db->insert('temp', $temp);
					redirect('diagnosa/' . ($id + 1));
				}
			}
		}
	}

	public function hasil()
	{
		$this->perhitungan->diagnosa();
	}

	public function reset()
	{
		$this->db->truncate('temp');
		redirect('home');
	}
}
