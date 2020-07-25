<?php

class Perhitungan_model extends CI_model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Gejala_model', 'gejala');
		$this->load->model('Rule_model', 'rule');
	}

	public function diagnosa()
	{
		foreach ($this->db->get('temp')->result_array() as $t) {
			$temp[] = $t['value'];
		}

		$gejala = implode(",", $temp);

		$data["listGejala"] = $this->gejala->getListById($gejala);
		//hitung
		$listKerusakan = $this->rule->getByGejala($gejala);
		$kerusakan = array();
		$i = 0;
		foreach ($listKerusakan->result() as $value) {
			$listGejala = $this->rule->getGejalaByKerusakan($value->kerusakan_id, $gejala);
			$combineCFmb = 0;
			$combineCFmd = 0;
			$CFBefore = 0;
			$j = 0;
			foreach ($listGejala->result() as $value2) {
				$j++;
				if ($j == 3) {
					$combineCFmb = $value2->mb;
					$combineCFmd = $value2->md;
				} else {
					$combineCFmb = $combineCFmb + ($value2->mb * (1 - $combineCFmb));
					$combineCFmd = $combineCFmd + ($value2->md * (1 - $combineCFmd));
				}
				$combinehasil = $combineCFmb - $combineCFmd;
			}

			if ($combinehasil) {
				$kerusakan[$i] = array(
					'kode' => $value->kode,
					'kerusakan' => $value->kerusakan,
					'kepercayaan' => $combinehasil * 100,
					'solusi' => $value->solusi
				);

				$i++;
			}
		}


		function cmp($a, $b)
		{
			return ($a["kepercayaan"] > $b["kepercayaan"]) ? -1 : 1;
		}
		usort($kerusakan, "cmp");
		$data["listKerusakan"] = $kerusakan;
		$data_hasil = array(
			'kode' => $kerusakan[0]['kode'],
			'kerusakan' => $kerusakan[0]['kerusakan'],
			'kepercayaan' => $kerusakan[0]['kepercayaan'],
			'solusi' => $kerusakan[0]['solusi'],

		);
		$this->db->insert('hasil', $data_hasil);
		$this->load->view('hasil/index', $data);
	}
}
