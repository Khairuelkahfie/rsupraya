<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cbpasien_model extends CI_Model
{
    public $tabel = 'cbpasien';
    public $id = 'sk_pasien';
    public $order = 'ASC';

    public function insertimport($data)
    {
        $this->db->insert_batch($this->tabel, $data);
        return $this->db->insert_id($this->id);
    }
    public function import($data)
    {
        return $this->db->insert($this->tabel, $data);
        // $this->db->insert_batch($this->tabel, $data);
    }
}
