<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembangan_model extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
    }
    function daftar_pesanan()
    {
        $query = $this->db->query('SELECT
        pesanan.id_pesanan,
        pesanan.nama,
        pesanan.jumlah,
        pesanan.upah_perpotong,
        model.nama as nama_model,
        pesanan.tanggal_diambil,
        SUM(produksi.potong_terselesaikan) as selesai,
        bahan_baku.nama as nama_bb,
        bahan_baku.jumlah as bb,
        (pesanan.jumlah-SUM(produksi.potong_terselesaikan)) as kurang
        FROM `pesanan` LEFT JOIN produksi ON pesanan.id_pesanan=produksi.id_pesanan
        JOIN model ON pesanan.id_model=model.id_model
        JOIN bahan_baku ON model.id_bahanbaku=bahan_baku.id_bahanbaku
        WHERE pesanan.tanggal_diambil>CURRENT_DATE()
        GROUP BY pesanan.id_pesanan');
        return $query->result_array();
    }
}

/* End of file Pengembangan_model.php */
/* Location: ./application/models/Pengembangan_model.php */