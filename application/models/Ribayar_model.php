<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ribayar_model extends CI_Model
{
    public $tabel = 'tb_ribayar';
    public $id = 'sk_bayar';
    public $order = 'ASC';
    function tampilcarabayar()
    {
        $this->db->select('cara_bayar, COUNT(cara_bayar) as total');
        $this->db->group_by('cara_bayar');
        $this->db->order_by('total');
        $hasil = $this->db->get($this->tabel)->result_array();
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
