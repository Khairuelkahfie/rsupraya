<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class importdb extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Cbpasien_model', 'cbpasien');
        $this->load->model('Ripasien_model', 'ripasien');
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
        $config['upload_path'] = './assets/excel/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name']     = 'doc' . time();
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();

            $reader->open('assets/excel/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'sk_pasien' => $row->getCellAtIndex(0),
                            'bayar' => $row->getCellAtIndex(1),
                        );
                        $this->cbpasien->insertimport($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('assets/excel' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Import Data Berhasil');
                redirect('importdb');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        }
    }
    // rawat inap
    // import data pasien
    public function ripasien()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('importdb/ripasien');
        $this->load->view('template/footer');
    }
    // akhir import data pasien
    // proses input kedatabase
    public function importripasien()
    {
        $config['upload_path'] = './assets/excel/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name']     = 'doc' . time();
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();

            $reader->open('assets/excel/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'sk_pasien' => $row->getCellAtIndex(0),
                            'no_rm' => $row->getCellAtIndex(1),
                        );
                        $this->ripasien->insertimport($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('assets/excel' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Import Data Berhasil');
                redirect('importdb');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        }
    }
    // akhir proses input kedatabase
    // akhir rawat inap
}
