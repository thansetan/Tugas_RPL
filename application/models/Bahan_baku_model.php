<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Bahan_baku_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get bahan_baku by id_bahanbaku
     */
    function get_bahan_baku($id_bahanbaku)
    {
        return $this->db->get_where('bahan_baku', array('id_bahanbaku' => $id_bahanbaku))->row_array();
    }

    /*
     * Get all bahan_baku
     */
    function get_all_bahan_baku()
    {
        $this->db->group_by('id_bahanbaku', 'desc');
        return $this->db->get('bahan_baku')->result_array();
    }

    /*
     * function to add new bahan_baku
     */
    function add_bahan_baku($params)
    {
        $this->db->insert('bahan_baku', $params);
        return $this->db->insert_id();
    }

    /*
     * function to update bahan_baku
     */
    function update_bahan_baku($id_bahanbaku, $params)
    {
        $this->db->where('id_bahanbaku', $id_bahanbaku);
        return $this->db->update('bahan_baku', $params);
    }

    /*
     * function to delete bahan_baku
     */
    function delete_bahan_baku($id_bahanbaku)
    {
        return $this->db->delete('bahan_baku', array('id_bahanbaku' => $id_bahanbaku));
    }
}