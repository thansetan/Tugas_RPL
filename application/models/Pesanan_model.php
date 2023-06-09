<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Pesanan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get pesanan by id_pesanan
     */
    function get_pesanan($id_pesanan)
    {
        return $this->db->get_where('pesanan', array('id_pesanan' => $id_pesanan))->row_array();
    }

    //Daftar Pesanan ( Karyawan dan Produksi )
    function daftar_pesanan()
    {
        $query = $this->db->query('SELECT

        pesanan.id_pesanan,
        pesanan.nama,
        pesanan.jumlah,
        pesanan.upah_perpotong,
        model.nama as nama_model,
        pesanan.tanggal_diambil,
        IFNULL(SUM(produksi.potong_terselesaikan),0) as selesai,
        bahan_baku.nama as nama_bb,
        bahan_baku.jumlah as bb,
        IFNULL((pesanan.jumlah-SUM(produksi.potong_terselesaikan)),pesanan.jumlah) as kurang
        FROM `pesanan` LEFT JOIN produksi ON pesanan.id_pesanan=produksi.id_pesanan
        JOIN model ON pesanan.id_model=model.id_model
        JOIN bahan_baku ON model.id_bahanbaku=bahan_baku.id_bahanbaku
        WHERE pesanan.tanggal_diambil>CURRENT_DATE()
        GROUP BY pesanan.id_pesanan');
        return $query->result_array();
    }


    /*
     * Get all pesanan
     */
    function get_all_pesanan()
    {
        //Panggil Nama
        $this->db->select('a.id_pesanan,a.jumlah,a.tanggal_diambil,a.nama,a.upah_perpotong,b.nama as nama_model');
        $this->db->from('pesanan a');
        $this->db->join('model b', 'a.id_model=b.id_model');
        //Tampilkan
        $this->db->group_by('id_pesanan', 'desc');
        return $this->db->get('pesanan')->result_array();
        // $query = $this->db->get();
        // $result = $query->result_array();

        // if (!empty($result)) {
        //     return $result;
        // }
    }

    /*
     * function to add new pesanan
     */
    function add_pesanan($params)
    {
        $this->db->insert('pesanan', $params);
        return $this->db->insert_id();
    }

    /*
     * function to update pesanan
     */
    function update_pesanan($id_pesanan, $params)
    {
        $this->db->where('id_pesanan', $id_pesanan);
        return $this->db->update('pesanan', $params);
    }

    /*
     * function to delete pesanan
     */
    function delete_pesanan($id_pesanan)
    {
        return $this->db->delete('pesanan', array('id_pesanan' => $id_pesanan));
    }
}
