<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riruang_model extends CI_Model
{
    public $tabel = 'tb_riruang';
    public $id = 'sk_ruang';
    public $order = 'ASC';
    public function insertimport($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace($this->tabel, $data);
        }
    }
}
