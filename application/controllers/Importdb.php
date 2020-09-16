<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Importdb extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->model('Auth_model', 'auth');
        $this->load->model('Cbpasien_model', 'cbpasien');
        $this->load->library('form_validation');
        $this->load->library('excel');
    }
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('importdb/index');
        $this->load->view('template/footer');
    }
    public function import()
    {
        if (isset($_FILES["file"]["name"])) {
            $path = $_FILES["file"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);
            foreach ($object->getWorksheetIterator() as $worksheet) {
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();
                // var_dump($highestRow);
                // var_dump($highestColumn);
                // die();
                for ($row = 2; $row <= $highestRow; $row++) {
                    $sk_pasien = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $bayar = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $data = array(
                        "sk_pasien" => $sk_pasien,
                        "carabayar" => $bayar
                    );
                }
            }
            // print_r($data);
            // die();

            // Sesuaikan key array dengan nama kolom di database                                                         
            // $data = array(
            //     "sk_pasie" => $rowData[0][0],
            //     "carabayar" => $rowData[0][1]
            // );
            $insert = $this->cbpasien->import($data);
        }

        redirect('importdb');
    }
}
