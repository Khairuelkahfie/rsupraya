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
        $this->load->model('Rjalamat_model', 'rjalamat');
    }
    public function index()
    {
        $alamat = $this->rjalamat->persebaran();
        $data = array(
            'ribayar'     => $this->ribayar->tampilcarabayar(),
            'ripasien'    => $this->ripasien->tampiljumlahpasien(),
            'ridimwaktu'  => $this->riwaktu->tampil(),
            'rjbayar'     => $this->rjbayar->tampilcarabayar(),
            'rjpasien'    => $this->rjpasien->tampiljumlahpasien(),
            'rjdimwaktu'  => $this->rjtanggal->tampil(),
            'penyakitri'  => $this->penyakitri->tampilpenyakit(),
            'penyakitrijk'  => $this->penyakitri->tampilpenyakitjk(),
            'alamat'    => $this->rjalamat->persebaran(),
        );
        // var_dump($data['alamat']);
        // die();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer');
        $this->load->view('admin/piechart', $data);
        $this->load->view('admin/linechart', $data);
        $this->load->view('admin/barchart', $data);

    }
   
    public function peta()
    {
        $alamat = $this->rjalamat->persebaran();
        $data  = array(
            'datak' => json_encode($alamat),
            'data' => $alamat,
            'Bk' => $alamat[0] , 
            'Bku' => $alamat[1] , 
            'jnp' => $alamat[2] , 
            'jgt' => $alamat[3] , 
            'kpg' => $alamat[4] , 
            'pry' => $alamat[5] , 
            'prb' => $alamat[6] , 
            'pbd' => $alamat[7] , 
            'prt' => $alamat[8] , 
            'pti' => $alamat[9] , 
            'prg' => $alamat[10] , 
            'pjt' => $alamat[11] , 
        );
        // echo $data['data'];
        // die();
        $this->load->view('peta',$data);
    }
    

}
