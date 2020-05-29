<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('card_News_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$ip    = $this->input->ip_address(); // Mendapatkan IP user
		$date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
		$waktu = time(); //
		$timeinsert = date("Y-m-d H:i:s");

		// Cek berdasarkan IP, apakah user sudah pernah mengakses hari ini
		$s = $this->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
		$ss = isset($s) ? ($s) : 0;


		// Kalau belum ada, simpan data user tersebut ke database
		if ($ss == 0) {
			$this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
		}

		// Jika sudah ada, update
		else {
			$this->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
		}


		$pengunjunghariini  = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "' GROUP BY ip")->num_rows(); // Hitung jumlah pengunjung

		$dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row();

		$totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0; // hitung total pengunjung

		$bataswaktu = time() - 300;

		$pengunjungonline  = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->num_rows(); // hitung pengunjung online


		$data['pengunjunghariini'] = $pengunjunghariini;
		$data['totalpengunjung'] = $totalpengunjung;
		$data['pengunjungonline'] = $pengunjungonline;

		$data['card_news'] = $this->card_News_model->get_news();

		$this->load->view('templates/header');
		$this->load->view('main_page', $data);
		$this->load->view('templates/footer');
	}
}
