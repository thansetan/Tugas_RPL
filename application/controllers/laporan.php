<?php


class laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Laporan_model');
    }

    //Laporan Gaji

    function gaji()
    {
        if ($this->session->userdata('status') == "manager") {
            $data['gaji'] = $this->Laporan_model->daftar_gaji();
            $data['_view'] = 'laporan/gaji';
            $this->load->view('layouts/main', $data);
        } else {
            $this->load->view('siapa');
        }
    }

    //Laporan Sisa Persediaan
    function persediaan()
    {
        if ($this->session->userdata('status') == "manager") {
            $data['persediaan'] = $this->Laporan_model->sisa_persediaan();
            $data['_view'] = 'laporan/persediaan';
            $this->load->view('layouts/main', $data);
        } else {
            $this->load->view('siapa');
        }
    }

    //Laporan Status Pesanan

    function pesanan()
    {
        if ($this->session->userdata('status') == "manager") {
            $data['pesanan'] = $this->Laporan_model->status_pesanan();
            $data['_view'] = 'laporan/pesanan';
            $this->load->view('layouts/main', $data);
        } else {
            $this->load->view('siapa');
        }
    }

    //Print gaji
    function print_gaji()
    {
        $data['gaji'] = $this->Laporan_model->daftar_gaji();
        $this->load->view('laporan/print_gaji', $data);
    }

    //Print persediaan
    function print_persediaan()
    {
        $data['persediaan'] = $this->Laporan_model->sisa_persediaan();
        $this->load->view('laporan/print_persediaan', $data);
    }

    //Print pesanan
    function print_pesanan()
    {
        $data['pesanan'] = $this->Laporan_model->status_pesanan();
        $this->load->view('laporan/print_pesanan', $data);
    }

    //PDF Gaji
    function pdf_gaji()
    {
        $tgl = (date('d-m-y'));
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-gaji-$tgl.pdf";
        $data['gaji'] = $this->Laporan_model->daftar_gaji();
        $this->pdf->load_view('laporan/print_gaji', $data);
    }

    //PDF Persediaan
    function pdf_persediaan()
    {
        $tgl = (date('d-m-y'));
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-persediaan-$tgl.pdf";
        $data['persediaan'] = $this->Laporan_model->sisa_persediaan();
        $this->pdf->load_view('laporan/print_persediaan', $data);
    }

    //PDF Pesanan
    function pdf_pesanan()
    {
        $tgl = (date('d-m-y'));
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-pesanan-$tgl.pdf";
        $data['pesanan'] = $this->Laporan_model->status_pesanan();
        $this->pdf->load_view('laporan/print_pesanan', $data);
    }
}
