<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rjalamat_model extends CI_Model
{
    public $tabel = 'tb_rjalamat';
    public $id = 'sk_alamat';
    public $order = 'ASC';
    public function insertimport($data)
    {
        $jumlah = count($data);
        // var_dump($jumlah);
        // die();
        if ($jumlah > 0) {
            $this->db->replace($this->tabel, $data);
        }
    }
    public function persebaran()
    {
        $this->db->select('kecamatan');
        $this->db->select('COUNT(kecamatan) as al');
        $this->db->group_by('kecamatan');
        $hasil = $this->db->get($this->tabel)->result_array();
        return $hasil;
    }
}
