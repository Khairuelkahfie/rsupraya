<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penyakitri_model extends CI_Model
{
    public $tabel = 'tb_penyakitri';
    public $id = 'sk_penyakit';
    public $order = 'ASC';
    function tampilpenyakit()
    {
        $this->db->select('jenis_penyakit, SUM(total) as t');
        $this->db->group_by('Jenis_penyakit');
        $hasil = $this->db->get($this->tabel)->result();
        return $hasil;
    }
    function tampilpenyakitjk()
    {
        $this->db->select('jenis_penyakit, SUM(laki_laki) as lk, SUM(perempuan) as pr');
        $this->db->group_by('Jenis_penyakit');
        $hasil = $this->db->get($this->tabel)->result();
        return $hasil;
    }
    // import database
    public function insertimport($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace($this->tabel, $data);
        }
    }
}
