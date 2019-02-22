<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_praktikum extends CI_Model {

    public function inputdata($data, $table)
    {
        $this->db->insert($table, $data);
        
    }

    public function get_data()
    {
        return $this->db->get('penghuni');
    }

    public function selectdata($nama, $nip)
    {
        $this->db->where('nama', $nama);
        $this->db->where('nip', $nip);
        return $this->db->get('karyawan');
        
    }
    public function paket($datapaket, $table)
    {
        $this->db->insert($table, $datapaket);
        
    }

    public function get_data1()
    {
        return $this->db->get('paket');
    }
}

?>
