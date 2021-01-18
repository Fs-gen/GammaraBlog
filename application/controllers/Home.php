<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$curl = curl_init();

		$url = 'https://gammaratanralili.com/';

		curl_setopt_array($curl, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true

		));

		$result = curl_exec($curl);
		$news = array();


		// link Berita
		preg_match_all('!<h2 class="jeg_post_title">\n(.*?)<a href="(.*?)" >(.*?)<\/a>\n(.*?)<\/h2>!', $result, $match);

		$news['link'] = $match[2];
		$news['judul'] = $match[3];

		preg_match_all('!loading="lazy" (.*?)data-src="(.*?)" (.*?)\/><\/div><\/a>!', $result, $match);

		$news['img'] = $match[2];

		$data['news'] = $news;
		$this->load->view('layouts/head');
		$this->load->view('index', $data);
		$this->load->view('layouts/foot');
	}

	public function info_pendaftaran()
	{

		$this->load->view('layouts/head');
		$this->load->view('infoPendaftaran');
		$this->load->view('layouts/foot');
	}
	public function info_pendaftaran_haji()
	{

		$this->load->view('layouts/head');
		$this->load->view('pendaftaranHaji');
		$this->load->view('layouts/foot');
	}
	public function pelayanan_kua()
	{

		$this->load->view('layouts/head');
		$this->load->view('pelayananKUA');
		$this->load->view('layouts/foot');
	}

	public function data_kua()
	{
		$this->load->view('layouts/head');
		$this->load->view('dataKUA');
		$this->load->view('layouts/foot');
	}
}
