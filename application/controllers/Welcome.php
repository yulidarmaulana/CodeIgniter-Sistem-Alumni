<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$data['pageTitle'] = 'KCDEV is Awesome';
		$data['pesanPertama'] = 'Hello from your EX';
		$data['pesanKedua'] = 'Hello';
		$data['pesanKetiga'] = 'Data ini dari Controller Welcome';

		// Memanggil model alumni
		$this->load->model('model_alumni');

		// Mengambil data alumni dari fungsi getAlumni pada model_alumni
		$data['alumni'] = $this->model_alumni->getAlumni();
		
		$this->load->view('welcome_message');
	}
}
