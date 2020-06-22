<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembangan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengembangan_model');
    }

    public function index()
    {
    }

    function input()
    {
        $data['_view'] = 'pengembangan/input';
        $this->load->view('pengembangan/main', $data);
    }
    function daftar()
    {
        $data['pesanan'] = $this->Pengembangan_model->daftar_pesanan();
        $data['_view'] = 'pengembangan/daftar';
        $this->load->view('pengembangan/main', $data);
    }
}

/* End of file Pengembangan.php */
/* Location: ./application/controllers/Pengembangan.php */