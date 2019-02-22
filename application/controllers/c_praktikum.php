<?php
     defined('BASEPATH') OR exit('No direct script access allowed');
    
     class c_praktikum extends CI_Controller {
     
         
     public function __construct()
     {
         parent::__construct();
         $this->load->model('m_praktikum');
          
     }

     public function loginkaryawan($value='loginkaryawan')
     {
        $this->load->view($value);
        
     }
     public function createpenghuni()
     {
        $nama = $this->input->post('nama');
        $unit = $this->input->post('unit');
        $noktp = $this->input->post('noktp');

        $data = array(
            'nama' => $nama, 
            'unit' => $unit,
            'noktp' => $noktp
            );
        $this->m_praktikum->inputdata($data, 'penghuni');
        
        
        redirect('c_praktikum/datapenghuni');
     }

     public function datapenghuni()
        {
            $data['value'] = $this->m_praktikum->get_data()->result();
            $this->load->view('datapenghuni', $data);
        }
        
     public function penghuni($value='penghuni')
     {
        $this->load->view($value);
        
     }

     public function login()
     {
        $nama = $this->input->post('nama');
        $nip = $this->input->post('nip');
        $this->m_praktikum->selectdata($nama, $nip)->num_rows();
       
        //     $data_session = array(
        //     'nama' => $nama,
        //     'nip' => $nip
        //     );
        
        // $this->session->set_userdata($data_session);
        redirect('c_praktikum/home'); 
        
         }
    public function home($value='home')
    {
        $this->load->view($value);
        
    }

    public function createpaket()
     {
        $tgl_dateng = $this->input->post('tgl_dateng');
        $penghuni = $this->input->post('penghuni');
        $karyawan = $this->input->post('karyawan');
        $tgl_ambil = $this->input->post('tgl_ambil');
        $isipaket = $this->input->post('isipaket');

        $datapaket = array(
            'tgl_dateng' => $tgl_dateng, 
            'penghuni' => $penghuni,
            'karyawan' => $karyawan,
            'isipaket' => $isipaket,
            'tgl_ambil' => $tgl_ambil 
            );
        $this->m_praktikum->paket($datapaket, 'paket');
        
        
        redirect('c_praktikum/datapaket');
     }

     public function datapaket()
        {
            $datapaket['value'] = $this->m_praktikum->get_data1()->result();
            $this->load->view('datapaket', $datapaket);
        }
    public function paket($value='paket')
    {
        $this->load->view($value);
        
    }

    }
?>