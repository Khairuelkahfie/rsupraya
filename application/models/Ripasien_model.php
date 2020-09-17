<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ripasien_model extends CI_Model
{
    public $tabel = 'tb_ripasien';
    public $id = 'skpasien';
    public $order = 'ASC';
    public function tampiljumlahpasien()
    {
        $this->db->select('*');
        $this->db->from($this->tabel);
        return $this->db->count_all_results();
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
