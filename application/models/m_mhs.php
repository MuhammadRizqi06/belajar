<?php

class M_mhs extends CI_Model
{
    public function getMhs()
    {
        return $this->db->get('tb_mahasiswa')->result_array();
    }
}
