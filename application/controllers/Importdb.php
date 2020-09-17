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
        $this->load->model('Ribayar_model', 'ribayar');
        $this->load->model('Rikelas_model', 'rikelas');
        $this->load->model('Ripoli_model', 'ripoli');
        $this->load->model('Riruang_model', 'riruang');
        $this->load->model('Riwaktu_model', 'riwaktu');
        $this->load->model('Rjalamat_model', 'rjalamat');
        $this->load->model('Rjcarabayar_model', 'rjcarabayar');
        $this->load->model('Rjpasien_model', 'rjpasien');
        $this->load->model('Rjpoli_model', 'rjpoli');
        $this->load->model('Rjtanggal_model', 'rjtanggal');
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
                redirect('importdb/ripasien');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        }
    }
    // akhir proses input kedatabase
    // akhir import data bayar
    // import data bayar
    public function ribayar()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('importdb/ribayar');
        $this->load->view('template/footer');
    }

    // proses input kedatabase
    public function importribayar()
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
                            'sk_bayar' => $row->getCellAtIndex(0),
                            'cara_bayar' => $row->getCellAtIndex(1),
                        );
                        $this->ribayar->insertimport($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('assets/excel' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Import Data Berhasil');
                redirect('importdb/ribayar');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        }
    }
    // akhir proses input kedatabase
    // akhir import data bayar

    // import data kelas
    public function rikelas()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('importdb/rikelas');
        $this->load->view('template/footer');
    }

    // proses input kedatabase
    public function importrikelas()
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
                            'sk_kelas' => $row->getCellAtIndex(0),
                            'kelas' => $row->getCellAtIndex(1),
                        );
                        $this->rikelas->insertimport($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('assets/excel' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Import Data Berhasil');
                redirect('importdb/rikelas');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        }
    }
    // akhir proses input kedatabase
    // akhir import data kelas

    // import data poli
    public function ripoli()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('importdb/ripoli');
        $this->load->view('template/footer');
    }

    // proses input kedatabase
    public function importripoli()
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
                            'sk_poli' => $row->getCellAtIndex(0),
                            'poli' => $row->getCellAtIndex(1),
                        );
                        $this->ripoli->insertimport($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('assets/excel' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Import Data Berhasil');
                redirect('importdb/ripoli');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        }
    }
    // akhir proses input kedatabase
    // akhir import data poli

    // import data ruang
    public function riruang()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('importdb/riruang');
        $this->load->view('template/footer');
    }

    // proses input kedatabase
    public function importriruang()
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
                            'sk_ruang' => $row->getCellAtIndex(0),
                            'ruangan' => $row->getCellAtIndex(1),
                        );
                        $this->riruang->insertimport($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('assets/excel' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Import Data Berhasil');
                redirect('importdb/riruang');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        }
    }
    // akhir proses input kedatabase
    // akhir import data ruang

    // import data waktu
    public function riwaktu()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('importdb/riwaktu');
        $this->load->view('template/footer');
    }

    // proses input kedatabase
    public function importriwaktu()
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
                            'sk_waktu' => $row->getCellAtIndex(0),
                            'pasien_masuk' => $row->getCellAtIndex(1),
                            'pasien_keluar' => $row->getCellAtIndex(2),
                        );
                        $this->riwaktu->insertimport($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('assets/excel' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Import Data Berhasil');
                redirect('importdb/riwaktu');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        }
    }
    // akhir proses input kedatabase
    // akhir import data ruang

    // akhir rawat inap

    // rawat jalan
    // import data alamat
    public function rjalamat()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('importdb/rjalamat');
        $this->load->view('template/footer');
    }
    public function importrjalamat()
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
                            'sk_alamat' => $row->getCellAtIndex(0),
                            'alamat' => $row->getCellAtIndex(1),
                        );
                        $this->rjalamat->insertimport($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('assets/excel' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Import Data Berhasil');
                redirect('importdb/rjalamat');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        }
    }
    // Akhir import data alamat
    // import data carabayar
    public function rjcarabayar()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('importdb/rjcarabayar');
        $this->load->view('template/footer');
    }
    public function importrjcarabayar()
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
                            'sk_caraBayar' => $row->getCellAtIndex(0),
                            'carabayar' => $row->getCellAtIndex(1),
                        );
                        $this->rjcarabayar->insertimport($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('assets/excel' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Import Data Berhasil');
                redirect('importdb/rjcarabayar');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        }
    }
    // Akhir import data carabayar

    // import data pasien
    public function rjpasien()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('importdb/rjpasien');
        $this->load->view('template/footer');
    }
    public function importrjpasien()
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
                            'pasien' => $row->getCellAtIndex(1),
                        );
                        $this->rjpasien->insertimport($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('assets/excel' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Import Data Berhasil');
                redirect('importdb/rjpasien');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        }
    }
    // Akhir import data pasien
    // import data poli
    public function rjpoli()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('importdb/rjpoli');
        $this->load->view('template/footer');
    }
    public function importrjpoli()
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
                            'sk_poli' => $row->getCellAtIndex(0),
                            'poliklinik' => $row->getCellAtIndex(1),
                        );
                        $this->rjpoli->insertimport($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('assets/excel' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Import Data Berhasil');
                redirect('importdb/rjpoli');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        }
    }
    // Akhir import data poli

    // import data tanggal
    public function rjtanggal()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('importdb/rjtanggal');
        $this->load->view('template/footer');
    }
    public function importrjtanggal()
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
                            'sk_tanggal' => $row->getCellAtIndex(0),
                            'tanggal' => $row->getCellAtIndex(1),
                        );
                        $this->rjtanggal->insertimport($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('assets/excel' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Import Data Berhasil');
                redirect('importdb/rjtanggal');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        }
    }
    // Akhir import data tanggal

    // Akhir rawat jalan


}
