<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rjpasien_model extends CI_Model
{
    public $tabel = 'tb_rjpasien';
    public $id = 'sk_pasien';
    public $order = 'ASC';
    public function tampiljumlahpasien()
    {
        $this->db->select('*');
        $this->db->from($this->tabel);
        return $this->db->count_all_results();
    }
}
