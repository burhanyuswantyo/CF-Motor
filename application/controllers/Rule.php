<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rule extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Gejala_model', 'gejala');
		$this->load->model('Kerusakan_model', 'kerusakan');
		$this->load->model('Rule_model', 'rule');
	}

	public function index()
	{
		$data['title'] = 'Data Rule';
		$data['rule'] = $this->rule->getRule();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('rule/index');
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Data Rule';
		$data['gejala'] = $this->gejala->getGejala();
		$data['kerusakan'] = $this->kerusakan->getKerusakan();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('rule/tambah');
		$this->load->view('templates/footer');
	}

	public function ubah($id)
	{
		$data['title'] = 'Ubah Data Rule';
		$data['gejala'] = $this->gejala->getGejala();
		$data['kerusakan'] = $this->kerusakan->getKerusakan();
		$data['rule'] = $this->rule->getById($id);
		$data['select'] = $this->rule->getSelected($id);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('rule/ubah');
		$this->load->view('templates/footer');
	}

	public function insert()
	{

		$this->rule->insert();
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show col-sm-2"
        role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>Data berhasil disimpan!</div>');
		redirect('rule');
	}

	public function update($id)
	{
		$this->rule->update($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show col-sm-2"
        role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>Data berhasil diubah!</div>');
		redirect('rule');
	}

	public function delete($id)
	{
		$this->rule->delete($id);
		redirect('rule');
	}
}
