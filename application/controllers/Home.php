<?php

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->model('m_mhs');
        $data['mahasiswa'] = $this->m_mhs->getMhs('mahasiswa');

        $this->load->view('Home', $data);
    }
}
