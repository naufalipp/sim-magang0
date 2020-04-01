<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UniversitasModel extends CI_Model
{
    public function getUniversitas()
    {
        $query = "SELECT * FROM ref_universitas WHERE aktif = '1'";

        return $this->db->query($query)->result_array();
    }

    public function tambah($data, $table)
    {
        return $this->db->query($data, $table);
    }

    public function ubah($data, $where, $table)
    {
        $this->db->where($where);
        return $this->db->update($table, $data);
    }

    public function hapus($where, $table)
    {
        $this->db->where($where);
        return $this->db->delete($table);
    }
}
