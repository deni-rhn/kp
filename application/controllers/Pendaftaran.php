<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	public function __construct() {
		parent::__construct();

		//jika belum login
		if(!$this->session->has_userdata('id')){
			redirect(base_url('auth/login'));
        }

        $this->load->model('daftar_pasien');
				$this->load->helper('string');

    }

    public function index(){
        redirect(base_url('pendaftaran/pasien'));
    }

	public function pasien()
	{

        $data['antrian'] = $this->daftar_pasien->get_nomor_antrian();
				$data['rm'] = random_string('numeric', 6);

        $this->load->view('layout/admin/header');
        $this->load->view('page/form-pendaftaran',$data);
        $this->load->view('layout/admin/footer');
    }

    public function daftar(){
        $this->daftar_pasien->daftarkan();
    }

    public function register()
    {
        $this->load->view('layout/admin/header');
        $this->load->view('page/form-register-user');
        $this->load->view('layout/admin/footer');
    }

    public function welcome_home()
    {
        $this->load->view('layout/admin/header');
        $this->load->view('page/welcome');
        $this->load->view('layout/admin/footer');
    }

}
