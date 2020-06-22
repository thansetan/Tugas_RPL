<?php

class laporan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // Tampilkan Gaji

    function daftar_gaji()
    {
        // $this->db->select('b.nama');
        // $this->db->select_sum('a.potong_terselesaikan');
        // // $this->db->select_sum('a.potong_terselesaikan*c.upah_perpotong');
        // $this->db->from('produksi a');
        // $this->db->join('upah_karyawan c', 'a.id_produksi=c.id_produksi');
        // $this->db->join('karyawan b', 'a.id_karyawan=b.id_karyawan');

        // $this->db->group_by('b.id_karyawan', 'desc');
        // return $this->db->get('karyawan')->result_array();

        // $query = $this->db->query('SELECT 
        // karyawan.nama,
        // SUM(produksi.potong_terselesaikan) as selesai, 
        // SUM(produksi.potong_terselesaikan*upah_karyawan.upah_perpotong) as gaji 
        // FROM `produksi` LEFT JOIN upah_karyawan ON produksi.id_produksi=upah_karyawan.id_produksi 
        // JOIN karyawan ON produksi.id_karyawan=karyawan.id_karyawan 
        // WHERE produksi.tanggal_produksi>=DATE_ADD(CURRENT_DATE(),INTERVAL -7 DAY) 
        // GROUP BY karyawan.id_karyawan');

        $query = $this->db->query("SELECT
        karyawan.nama,
        SUM(produksi.potong_terselesaikan) as selesai,
        SUM(produksi.potong_terselesaikan*pesanan.upah_perpotong) as gaji
        FROM `produksi` LEFT JOIN pesanan ON produksi.id_pesanan=pesanan.id_pesanan
        JOIN karyawan ON produksi.id_karyawan=karyawan.id_karyawan
        WHERE produksi.tanggal_produksi>=DATE_ADD(CURRENT_DATE(),INTERVAL -7 DAY) AND produksi.ket='TERVERIFIKASI'
        GROUP BY karyawan.id_karyawan");
        return $query->result_array();
    }

    //Tampilkan Persediaan

    function sisa_persediaan()
    {
        // $query = $this->db->query('SELECT 
        // bahan_baku.nama as nama,
        // persediaan.jumlah as tersedia,
        // IFNULL((bahan_baku.jumlah*SUM(pesanan.jumlah)),0) as digunakan,
        // IFNULL((persediaan.jumlah-(bahan_baku.jumlah*SUM(pesanan.jumlah))),persediaan.jumlah) as sisa
        // FROM `persediaan` JOIN bahan_baku ON persediaan.id_bahanbaku=bahan_baku.id_bahanbaku
        // LEFT JOIN model ON model.id_bahanbaku=bahan_baku.id_bahanbaku
        // LEFT JOIN pesanan ON pesanan.id_model=model.id_model
        // GROUP BY persediaan.id_persediaan');
        $query = $this->db->query('SELECT 
        persediaan.id_persediaan,
        bahan_baku.nama as nama,
        persediaan.jumlah as tersedia,
        IFNULL((SUM(produksi.potong_terselesaikan)*bahan_baku.jumlah),0) as digunakan,
        IFNULL((persediaan.jumlah-(SUM(produksi.potong_terselesaikan)*bahan_baku.jumlah)),persediaan.jumlah) as sisa
        FROM `persediaan` LEFT JOIN bahan_baku ON persediaan.id_bahanbaku=bahan_baku.id_bahanbaku
        LEFT JOIN model ON model.id_bahanbaku=bahan_baku.id_bahanbaku
        LEFT JOIN pesanan ON pesanan.id_model=model.id_model
        LEFT JOIN produksi ON pesanan.id_pesanan=produksi.id_pesanan
        GROUP BY persediaan.id_persediaan');
        return $query->result_array();
    }

    //Tampilkan Pesanan

    function status_pesanan()
    {
        $query = $this->db->query('SELECT        
        pesanan.nama,
        pesanan.jumlah,
        IFNULL(SUM(produksi.potong_terselesaikan),0) as selesai,
        IFNULL((pesanan.jumlah-SUM(produksi.potong_terselesaikan)),pesanan.jumlah) as kurang
        FROM `pesanan` LEFT JOIN produksi ON pesanan.id_pesanan=produksi.id_pesanan
        GROUP BY pesanan.id_pesanan');
        return $query->result_array();
    }
}
