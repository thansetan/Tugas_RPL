<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gaji extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Gaji_model');
	}

	public function index()
	{
		$data['nama'] = $this->Gaji_model->tampil_nama();
		$data['gaji'] = $this->Gaji_model->tampil_gaji();
		$data['_view'] = 'gaji/index';
		$this->load->view('krywn/main', $data);
	}
}

/* End of file gaji.php */
/* Location: ./application/controllers/gaji.php */