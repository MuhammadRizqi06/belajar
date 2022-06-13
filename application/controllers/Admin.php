<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	protected $jumlah;

	public function index()
	{
		$data['jumlahPkj'] = $this->m_pekerja->jumlahPkj();
		$data['jumlahPlg'] = $this->m_pelanggan->jumlahPlg();
		$data['jumlahVaksin'] = $this->m_vaksin->jumlahVaksin();
		$data['totalTransaksi'] = $this->m_transaksi->totalTransaksi();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}
}
