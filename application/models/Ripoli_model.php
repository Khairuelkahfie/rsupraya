<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ripoli_model extends CI_Model
{
    public $tabel = 'tb_ripoli';
    public $id = 'sk_poli';
    public $order = 'ASC';
    public function insertimport($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace($this->tabel, $data);
        }
    }
}
