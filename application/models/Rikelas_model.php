<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rikelas_model extends CI_Model
{
    public $tabel = 'tb_rikelas';
    public $id = 'sk_kelas';
    public $order = 'ASC';
    // import database
    public function insertimport($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace($this->tabel, $data);
        }
    }
}
