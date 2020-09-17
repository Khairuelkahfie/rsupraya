<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cbpasien_model extends CI_Model
{
    public $tabel = 'cbpasien';
    public $id = 'sk_pasien';
    public $order = 'ASC';

    public function insertimport($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace($this->tabel, $data);
        }
        // $this->db->insert_batch('daerah', $data);
        // return $this->db->insert_id();
    }
}
