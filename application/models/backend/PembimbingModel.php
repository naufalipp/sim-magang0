<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PembimbingModel extends CI_Model
{
    public function getPembimbing()
    {
        $query = "SELECT * FROM pembimbing WHERE aktif = '1'";

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
