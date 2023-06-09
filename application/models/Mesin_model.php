<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Mesin_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get mesin by id_mesin
     */
    function get_mesin($id_mesin)
    {
        return $this->db->get_where('mesin', array('id_mesin' => $id_mesin))->row_array();
    }

    /*
     * Get all mesin
     */
    function get_all_mesin()
    {
        //Panggil Nama
        $this->db->select('a.id_mesin,b.nama as id_perusahaan,a.nama');
        $this->db->from('mesin a');
        $this->db->join('perusahaan b', 'a.id_perusahaan = b.id_perusahaan');
        //Tampilkan
        $this->db->group_by('id_mesin', 'desc');
        return $this->db->get('mesin')->result_array();
        // $query = $this->db->get();
        // $result = $query->result_array();

        // if (!empty($result)) {
        //     return $result;
        // }
    }

    /*
     * function to add new mesin
     */
    function add_mesin($params)
    {
        $this->db->insert('mesin', $params);
        return $this->db->insert_id();
    }

    /*
     * function to update mesin
     */
    function update_mesin($id_mesin, $params)
    {
        $this->db->where('id_mesin', $id_mesin);
        return $this->db->update('mesin', $params);
    }

    /*
     * function to delete mesin
     */
    function delete_mesin($id_mesin)
    {
        return $this->db->delete('mesin', array('id_mesin' => $id_mesin));
    }
}
