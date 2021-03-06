<?php

class Rule_model extends CI_model
{
	public function getNilaiCf()
	{
		return $this->db->select('*, rule.id AS rule_id ')
			->from('rule')
			->join('gejala', 'gejala.id = rule.gejala_id ')
			->join('kerusakan', 'kerusakan.id = rule.kerusakan_id ')
			->order_by('rule.id', 'DESC')
			->get()
			->result_array();
	}

	public function getRule()
	{
		$query = "SELECT `rule`.`id`, `kerusakan`.`kerusakan`, `gejala`.`gejala`, `rule`.`mb`, `rule`.`md`
					FROM `kerusakan`
					JOIN `rule`
					ON `kerusakan`.`id` = `rule`.`kerusakan_id`
					JOIN `gejala`
					ON `rule`.`gejala_id` = `gejala`.`id`";

		return $this->db->query($query)->result_array();
	}

	public function insert()
	{
		$gejala_id = $this->input->post('gejala');
		$kerusakan_id = $this->input->post('kerusakan');
		$md = $this->input->post('md');
		$mb = $this->input->post('mb');

		$data = array(
			'gejala_id' => $gejala_id,
			'kerusakan_id' => $kerusakan_id,
			'md' => $md,
			'mb' => $mb,
		);
		$this->db->insert('rule', $data);
	}

	public function getById($id)
	{

		return $this->db->query("SELECT *, a.id as nid FROM rule a JOIN kerusakan b ON b.id = a.kerusakan_id WHERE a.id='$id' ")->row_array();
	}

	public function update()
	{
		$id = $this->input->post('id');
		$gejala_id = $this->input->post('gejala');
		$kerusakan_id = $this->input->post('kerusakan');
		$md = $this->input->post('md');
		$mb = $this->input->post('mb');

		$data = array(
			'gejala_id' => $gejala_id,
			'kerusakan_id' => $kerusakan_id,
			'md' => $md,
			'mb' => $mb,
		);

		$this->db->where('id', $id);
		$this->db->update('rule', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('rule');
	}

	public function getListNilaiCf()
	{
		return $this->db->select('*, rule.id AS rid ')
			->from('rule')
			->join('gejala', 'gejala.id = rule.gejala_id ')
			->join('kerusakan', 'kerusakan.id = rule.kerusakan_id ')
			->get()
			->result_array();
	}

	function getByGejala($gejala)
	{
		$query = "select distinct rule.kerusakan_id, kerusakan.kode, kerusakan.kerusakan, kerusakan.solusi
					from rule
					inner join kerusakan 
					on rule.kerusakan_id = kerusakan.id
					where rule.gejala_id in (" . $gejala . ")
					order by kerusakan_id, gejala_id";

		return $this->db->query($query);
	}

	function getGejalaByKerusakan($id, $gejala = null)
	{
		$query = "select rule.gejala_id, mb, md from rule where kerusakan_id=" . $id;

		if ($gejala != null) {
			$query = $query . " and gejala_id in (" . $gejala . ")";
		} else {
			$query = $query . " order by gejala_id";
		}

		return $this->db->query($query);
	}

	function getSelected($id)
	{
		$query = "SELECT `kerusakan`.`id` AS 'id_kerusakan', `kerusakan`.`kode` AS 'kode_kerusakan', `kerusakan`.`kerusakan`, `gejala`.`id` AS 'id_gejala', `gejala`.`kode` AS 'kode_gejala', `gejala`.`gejala`
					FROM `kerusakan`
					JOIN `rule`
					ON `kerusakan`.`id` = `rule`.`kerusakan_id`
					JOIN `gejala`
					ON `rule`.`gejala_id` = `gejala`.`id`
					WHERE `rule`.`id` = '$id'";

		return $this->db->query($query)->row_array();
	}

	function getkerusakan()
	{
		return $this->db->get('kerusakan');
	}

	function total_rows($q = NULL)
	{
		$this->db->from('rule');
		return $this->db->count_all_results();
	}
}
