<?php

class Pelanggan extends CI_Controller
{
    //controler untuk menyusun tampilan utama di halaman pelanggan (terhubung dengan view v_pelanggan)
    public function  index()
    {
        $data['pelanggan'] = $this->m_pelanggan->getPelanggan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_pelanggan', $data);
        $this->load->view('templates/footer');
    }

    //controller untuk menambahkan data pasien (terhubung dengan method setPasien di model m_pasien)
    public function tambah_pelanggan()
    {
        $nik   = $this->input->post('nik');
        $nama_plg   = $this->input->post('nama_plg');
        $tgl_daftar   = $this->input->post('tgl_daftar');
        $nohp   = $this->input->post('nohp');
        $umur   = $this->input->post('umur');
        $jk   = $this->input->post('jk');
        $alamat   = $this->input->post('alamat');



        $plg = array(
            'nik' => $nik,
            'nama_plg' => $nama_plg,
            'tgl_daftar' => $tgl_daftar,
            'nohp' => $nohp,
            'umur' => $umur,
            'jk' => $jk,
            'alamat' => $alamat
        );
        $this->m_pelanggan->setPelanggan($plg);
        $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Data Berhasil Ditambahkan</strong>
        </div>');
        redirect('pelanggan/index');
    }

    //controller untuk menghapus data pelanggan berdasarkan id_pasien (terhubung dengan method hapus di model m_pelanggan)
    public function hapus($id_pelanggan)
    {
        $where = array('id_pelanggan' => $id_pelanggan);
        $this->m_pelanggan->hapus($where, 'tb_pasien');
        $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Data Berhasil Dihapus</strong>
        </div>');
        redirect('pelanggan/index');
    }
}
