<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('welcome');
        }
        $this->load->model('Ribayar_model', 'ribayar');
        $this->load->model('Ripasien_model', 'ripasien');
        $this->load->model('Riwaktu_model', 'riwaktu');
        $this->load->model('Rjcarabayar_model', 'rjbayar');
        $this->load->model('Rjpasien_model', 'rjpasien');
        $this->load->model('Rjtanggal_model', 'rjtanggal');
        $this->load->model('Penyakitri_model', 'penyakitri');
    }
    public function index()
    {
        $data = array(
            'ribayar'     => $this->ribayar->tampilcarabayar(),
            'ripasien'    => $this->ripasien->tampiljumlahpasien(),
            'ridimwaktu'  => $this->riwaktu->tampil(),
            'rjbayar'     => $this->rjbayar->tampilcarabayar(),
            'rjpasien'    => $this->rjpasien->tampiljumlahpasien(),
            'rjdimwaktu'  => $this->rjtanggal->tampil(),
            'penyakitri'  => $this->penyakitri->tampilpenyakit(),
            'penyakitrijk'  => $this->penyakitri->tampilpenyakitjk()
        );
        // var_dump($data['penyakitrijk']);
        // die();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer', $data);
    }
    public function coba()
    {
        echo "percobaan ";
    }
}
