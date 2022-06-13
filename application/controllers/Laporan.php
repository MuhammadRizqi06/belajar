<?php

class Laporan extends CI_Controller
{
    public function index()
    {
        $data['laporan'] = $this->m_transaksi->getTransaksi()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_laporan', $data);
        $this->load->view('templates/footer');
    }
}
