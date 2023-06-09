<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get upah_karyawan by id_upah
     */
    function get_user($id_user)
    {
        return $this->db->get_where('user', array('id_user' => $id_user))->row_array();
    }

    /*
     * Get all upah_karyawan
     */
    function get_all_user()
    {
        //Panggil Nama
        // $this->db->select('a.id_user,a.username,a.password,a.level,a.nama,a.pemilik,b.nama');
        // $this->db->from('user a');
        // $this->db->join('karyawan b', 'a.pemilik=b.id_karyawan');
        //Tampilkan
        // $query = $this->db->get();
        // $result = $query->result_array();

        // if (!empty($result)) {
        //     return $result;
        // }
        $this->db->order_by('id_user', 'desc');
        return $this->db->get('user')->result_array();
    }

    /*
     * function to add new upah_karyawan
     */
    function add_user($params)
    {
        $this->db->insert('user', $params);
        return $this->db->insert_id();
    }

    /*
     * function to update upah_karyawan
     */
    function update_user($id_user, $params)
    {
        $this->db->where('id_user', $id_user);
        return $this->db->update('user', $params);
    }

    /*
     * function to delete upah_karyawan
     */
    function delete_user($id_user)
    {
        return $this->db->delete('user', array('id_user' => $id_user));
    }
}
