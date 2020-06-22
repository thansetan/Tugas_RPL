<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gaji_model extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
    }

    function tampil_nama()
    {
        $saya = ucfirst($_SESSION["pemilik"]);
        $query = $this->db->query("SELECT
        karyawan.nama
        FROM karyawan
        WHERE karyawan.id_karyawan='$saya'");
        return $query->result_array();
        // $query = $this->db->query('SELECT
        // karyawan.nama,
        // SUM(produksi.potong_terselesaikan) as selesai,
        // SUM(produksi.potong_terselesaikan*pesanan.upah_perpotong) as gaji
        // FROM `produksi` LEFT JOIN pesanan ON produksi.id_pesanan=pesanan.id_pesanan
        // JOIN karyawan ON produksi.id_karyawan=karyawan.id_karyawan
        // WHERE produksi.tanggal_produksi>=DATE_ADD(CURRENT_DATE(),INTERVAL -7 DAY)
        // GROUP BY karyawan.id_karyawan');
        // return $query->result_array();
    }
    function tampil_gaji()
    {
        $saya = ucfirst($_SESSION["pemilik"]);
        $query = $this->db->query("SELECT
        IFNULL(SUM(produksi.potong_terselesaikan),'TIDAK ADA') as selesai,
        IFNULL(SUM(produksi.potong_terselesaikan*pesanan.upah_perpotong),0) as gaji
        FROM `produksi` LEFT JOIN pesanan ON produksi.id_pesanan=pesanan.id_pesanan
        JOIN karyawan ON produksi.id_karyawan=karyawan.id_karyawan
        WHERE produksi.tanggal_produksi>=DATE_ADD(CURRENT_DATE(),INTERVAL -7 DAY) AND karyawan.id_karyawan='$saya' AND produksi.ket='TERVERIFIKASI'");
        return $query->result_array();
    }
}

/* End of file Gaji_model.php */
/* Location: ./application/models/Gaji_model.php */