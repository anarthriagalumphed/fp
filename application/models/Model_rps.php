<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_rps extends CI_Model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }
    public function get_data_single($where)
    {
        return $this->db->get_where('tbl_rps', $where);
    }
    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function update_data($data, $table)
    {
        $this->db->where('id_rps', $data['id_rps']);
        $this->db->update($table, $data);
    }
}
